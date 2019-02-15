<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseArticleKnowledgeBaseCategory extends Model
{
    protected $connection = 'backend';
    protected $table = 'knowledge_base_article_knowledge_base_category';
    protected $guarded = [];

    protected $casts = [
        'knowledge_base_article_id' => 'string',
        'knowledge_base_category_id' => 'string'
    ];

}
