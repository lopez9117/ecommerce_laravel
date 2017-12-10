<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoopingCart extends Model
{
    //

public function inShoppingCarts()
{

	return $this->hasMany('App\InShoppingCart');
}

public function products(){

	return $this->belongsToMany('App\Product','in_shopping_carts');
}

public function productsSize(){

	return $this->products()->count();
}



}
