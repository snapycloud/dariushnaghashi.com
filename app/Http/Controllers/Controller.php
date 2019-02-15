<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\KnowledgeBaseArticle;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
    	$galleries = KnowledgeBaseArticle::where('deleted', 0)->whereHas(
			            'category', function($q){ 
			                $q->where('knowledge_base_category_id', '5c6705f0dc1ec1ccd')->limit(10);
			            }
			        )->where('status', 'Published')->orderBy('publish_date', 'ASC')->get();

    	return view('index', [
    		'galleries' => $galleries
    	]);
    }

    public function getGalleryBySlug($slug)
    {
        $gallery = KnowledgeBaseArticle::where('deleted', 0)->where('slug', $slug)->first();
        if(!$gallery->count()){
            return abort(404);
        }
        $gallery->view++;
        $gallery->save();

        return view('gallery', [
            'gallery' => $gallery
        ]);
    }
}
