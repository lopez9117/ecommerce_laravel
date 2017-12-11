<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    protected $fillable = ['status'];

 public function inShoppingCarts()
{

	return $this->hasMany('App\InShoppingCart');
}

public function products(){

	return $this->belongsToMany('App\Product','in_shopping_carts');
}

public function total(){

	return $this->products()->sum('precio');
}


 public function productsSize(){

	return $this->products()->count();
}


		//Buscar o crear un carrito de compra
public static function findOrCreateBySessionID($shopping_cart_id){
	if ($shopping_cart_id) 
		//Buscar el carrito de compra
		return ShoppingCart::findBySession($shopping_cart_id);

	else
	
		//Crear un carrito de compra
			return ShoppingCart::createWithoutSession();
	
}
	//Metodo para buscar el carrito de compra
	public static function findBySession($shopping_cart_id){
			return ShoppingCart::find($shopping_cart_id);
	}

	//metodo para crear carrito si este no existe
	public static function createWithoutSession(){

		return ShoppingCart::create([
			'status' => 'incompleted'	
		]);
	}





}
