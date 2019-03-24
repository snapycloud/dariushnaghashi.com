<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $connection = 'backend';
    protected $table = 'product_brand';
    protected $guarded = [];

    protected $casts = [
        'id' => 'string'
    ];

}
