<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\{
    ProductsCategory, KnowledgeBaseArticle
};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
    	$galleries = ProductsCategory::where('deleted', 0)->get();

        $videos = KnowledgeBaseArticle::where('deleted', 0)->whereHas(
                        'category', function($q){ 
                            $q->where('knowledge_base_category_id', '5c6954bd6bf0604b2')->limit(10);
                        }
                    )->where('status', 'Published')->orderBy('publish_date', 'ASC')->first();


    	return view('index', [
    		'galleries' => $galleries, 'video' => $videos
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
                            $q->where('knowledge_base_category_id', '5c6954bd6bf0604b2')->limit(10);
                        }
                    )->where('status', 'Published')->orderBy('publish_date', 'ASC')->get();

        return view('video', [
            'videos' => $videos
        ]);
    }
}
