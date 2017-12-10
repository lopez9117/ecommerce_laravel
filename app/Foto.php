<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //


    protected $fillable = [


		'id', 'nombre', 'description', 'ruta','precio','producto_id'

	];
 


	public function producto() {

		return $this->belongsTo('App\Product');
	}


}
