@extends('layouts.app');


@section('content')

<style>

</style>

<div class="container text-center">

<div class="card text-left" style="border: solid 1px;">
		<h1 style="padding-bottom: 10px; border-bottom: solid 1px;">{{$products->tittle}}</h1>

	<div class="row">

		<div class="col-sm-6 col-xs-12"></div>
		<div class="col-sm-6 col-xs-12">
			<p> <strong>Descripción:</strong></p>
			<p>{{$products->description}}</p>
			<p><a href="" class="btn btn-success">Agregar al Carrito</a></p>
		</div>
		
	</div>	
</div>	

</div>

@endsection