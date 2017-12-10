@extends('layouts.app');


@section('content')

<div class="container">
<div class="big-padding text-center blue-gray white-text">
	<h2>Productos</h2>
</div>

<button class="btn btn-prymary">
<a href="products/create">Nuevo Producto</a>
</button>

<br>	

<table class="table table-bordered">
		<thead>
			<td>ID</td>
			<td>TITULO</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td>Acciones</td>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->tittle}}</td>
			<td>{{$product->description}}</td>
			<td>{{$product->precio}}</td>
			<td>
				<a href=""><label> Editar</label></a>
				<form style="display: inline;" method="POST" action="{{route('products.destroy',$product->id)}}">
   					 {!!csrf_field()!!}
   					 {!!method_field('DELETE')!!}
   					 <button type="submit" class="btn btn-danger">Eliminar</button>
  					</form>
				<a href=""><label> Ver</label></a>
			</td>
</tr>
			@endforeach
		</tbody>

	</table>
	
	</div>

@endsection
