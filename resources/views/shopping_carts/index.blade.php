@extends('layouts.app');

@section('content')




	<div class="big-padding text-center blue-gray white-text">
	<h2>Tu Carrito de compras</h2>
     </div>

	

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Producto</td>
					<td>Precio</td>
					
				</tr>
				
			</thead>		
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product-> tittle}}</td>
					<td>{{$product->precio}}</td>
					
				</tr>
				@endforeach

				<tr>
					<td>Total</td>
					<td>{{$total}}</td>
				</tr>
			</tbody>


		</table>

	</div>

@endsection