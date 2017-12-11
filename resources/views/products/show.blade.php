@extends('layouts.app');


@section('content')

<style>

</style>

<div class="container text-center">

<div class="card text-left" style="border: solid 1px;">
		<h1 style="padding-bottom: 10px; border-bottom: solid 1px;">{{$products->tittle}}</h1>

	<div class="row">

		<div class="col-sm-6 col-xs-12">aqui va la imagen</div>
		<div class="col-sm-6 col-xs-12">
			<p> <strong>Descripción:</strong></p>
			<p>{{$products->description}}</p>

			<form  method="POST" action="{{route('in_shopping_carts.store')}}">
   					 {!!csrf_field()!!}
   					 {!!method_field('POST')!!}		
   					 <input type="hidden" name="product_id" value="{{$products->id}}">			
			<p><button class="btn btn-success">Agregar al Carrito</button></p>
			</form>
		</div>
		
	</div>	
</div>	

</div>

@endsection