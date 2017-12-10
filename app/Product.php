<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //



	protected $fillable = [
		'id', 'user_id', 'tittle', 'description','precio'

	];


	public function fotos() {

		return $this->hasMany('App\Foto');

	}

	public function propietario(){

		return $this->belongsTo('App\User');
	}
}
