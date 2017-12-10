@extends('layouts.app');


@section('content')

<style>
	

</style>
<div class="container" style="background-color: white">

<h1>Nuevo Producto</h1>	



<form action="/products" method="POST">

	{!! csrf_field()!!}
	<div class="form-group">
		<input type="text" name="tittle" placeholder="Titulo">
	</div>
	<div class="form-group">
		<input type="number" name="precio" placeholder="Precio">
	</div>
	<div class="form-group">
		<input type="textarea" name="description" placeholder="descripcion del producto">
	</div>
	<div class="form-group text-right" >
		<a href="{{url('/products')}}">Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-success">
		
	</div>
	

</form>

</div>

@endsection