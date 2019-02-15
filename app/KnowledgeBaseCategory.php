<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseCategory extends Model
{
    protected $connection = 'backend';
    protected $table = 'knowledge_base_category';
    protected $guarded = [];
    
    protected $casts = [
        'id' => 'string',
    ];

    public function article()
	{
		return $this->belongsToMany('App\KnowledgeBaseArticle', 'knowledge_base_article_knowledge_base_category', 'knowledge_base_category_id', 'knowledge_base_article_id');
	}
}
