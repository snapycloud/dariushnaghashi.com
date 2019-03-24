<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Morilog\Jalali\jDateTime;

class Products extends Model
{
    protected $connection = 'backend';
    protected $table = 'product';
    public $timestamps = false;

    protected $casts = [
        'id' => 'string',
        'category_id' => 'string',
        'brand_id' => 'string'
    ];

    protected $guarded = [];

    public function category()
    {
		return $this->hasMany('App\ProductsCategory', 'id', 'category_id');
    }

    public function brand()
    {
		return $this->hasMany('App\Brands', 'id', 'brands_id');
    }


	public function getModifiedAtAttribute()
	{
		return jDateTime::strftime('Y-m-d', strtotime($this->attributes['modified_at']));
	}
}
