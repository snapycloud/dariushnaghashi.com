<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\KnowledgeBaseArticle;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = KnowledgeBaseArticle::select(['name', 'slug'])->where('deleted', 0)->whereHas(
            'category', function($q){ 
                $q->where('knowledge_base_category_id', '5c6705f0dc1ec1ccd');
            }
        )->where('status', 'Published')->orderBy('publish_date', 'DESC')->get();

        

        View::share('menu', $menu);
    }
}
