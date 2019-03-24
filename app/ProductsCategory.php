<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model
{
    protected $connection = 'backend';
    protected $table = 'product_category';
    protected $guarded = [];

    protected $casts = [
        'id' => 'string'
    ];

}
