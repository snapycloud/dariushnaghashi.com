<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use SnapyCloud\PhpApi\Client\SnapyClient;
use App\{
    ProductsCategory, KnowledgeBaseArticle
};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $url = 'https://5c96a5002b4e543eb.onpremise.snapycloud.com';
        $this->client = new SnapyClient($url);
        $this->client->setApiKey('e9555b8f7086454e6a30886922c85957');
        $this->client->setSecretKey('22476211336265784ceae8f561e3fabd');
    }

    public function client()
    {
        return $this->client;
    }


    public function getIndex()
    {
    	$galleries = ProductsCategory::where('deleted', 0)->orderBy('Order', 'DESC')->whereHas(
                        'product', function($q){ 
                            $q->where('deleted', 0);
                        }
                    )->get();

        $video = KnowledgeBaseArticle::where('id', '5ca3f55d2117e6ba1')->first();


    	return view('index', [
    		'galleries' => $galleries, 'video' => $video
    	]);
    }

    public function getGalleryBySlug($slug)
    {
        $gallery = ProductsCategory::where('deleted', 0)->where('slug', $slug)->first();
        if(!$gallery->count()){
            return abort(404);
        }

        return view('gallery', [
            'gallery' => $gallery
        ]);
    }
    public function getVideos()
    {
        $videos = KnowledgeBaseArticle::where('deleted', 0)->whereHas(
                        'category', function($q){ 
                            $q->where('knowledge_base_category_id', '5ca3ec4ce3f1ef8c0')->limit(10);
                        }
                    )->where('status', 'Published')->orderBy('publish_date', 'ASC')->get();

        return view('video', [
            'videos' => $videos
        ]);
    }

    public function postBooking(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email',
            'tel' => 'required|regex:/(09)[0-9]{8}/',
            'subject' => 'required|max:255',
            'message' => 'required|max:1255'
        ]);
        $fullname = explode(' ', $request->get('name'));
        if(count($fullname) >= 2) {
            $firstName = $fullname[0];
            $lastName = $fullname[1];
        } else {
            $firstName = $fullname;
            $lastName = $fullname;
        }
        $this->client()->request('POST', 'lead', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'emailAddress' => $request->get('email'),
            'phoneNumber' => $request->get('tel'),
            'description' => $request->get('message'),
            'title' => $request->get('subject')
        ]);

        return redirect()->back();
    }

    public function getShopCard()
    {
        return view('shop_card');
    }

    public function postAddToCard(Request $request)
    {
        # code...
    }
}
