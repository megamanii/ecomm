<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Charts;

class Category extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function products() {
    	/* $chart = Charts::database(User::all(),'bar','material')
            //->setLabels(['$category'])
            ->responsive(true)
            ->groupBy('name','category_id');

        return view('admin.category.index', ['chart' => $chart]); */

    	// return $this->hasMany(Product::class);
    	// relationship between products and category
    	return $this->hasMany('App\Product');
    }
}
