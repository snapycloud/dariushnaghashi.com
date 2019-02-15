<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
    	$galleries = KnowledgeBaseArticle::where('deleted', 0)->whereHas(
			            'category', function($q){ 
			                $q->where('knowledge_base_category_id', '5c6705f0dc1ec1ccd');
			            }
			        )->where('status', 'Published')->orderBy('publish_date', 'DESC')->get();

    	return view('index', [
    		'galleries' => $galleries
    	]);
    }
}
