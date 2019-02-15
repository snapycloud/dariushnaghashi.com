<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Morilog\Jalali\jDateTime;

class KnowledgeBaseArticle extends Model
{
    protected $connection = 'backend';
    protected $table = 'knowledge_base_article';
    public $timestamps = false;

    protected $casts = [
        'id' => 'string',
        'assigned_user_id' => 'string'
    ];



    protected $guarded = [];

	public function category()
	{
		return $this->belongsToMany('App\KnowledgeBaseCategory', 'knowledge_base_article_knowledge_base_category', 'knowledge_base_article_id', 'knowledge_base_category_id');
	}

	public function attachment()
	{
		return $this->hasMany('App\Attachment', 'parent_id', 'id');
	}

	public function user()
	{
		return $this->hasOne('App\Users', 'id', 'assigned_user_id');
	}

	public function getModifiedAtAttribute()
	{
		return jDateTime::strftime('Y-m-d', strtotime($this->attributes['modified_at']));
	}
}
