<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name',
    	'description',
    	'price',
    	'size',
    	'image',
    	'category_id'
    ];

    public function category()
    {

        return $this->belongsTo('App\Product');

    }

    public function images()
    {
    	return $this->hasMany('App\ProductImage');
    }

}