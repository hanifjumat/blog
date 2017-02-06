@extends('layouts.main')

@section('content');

	<h3>Cart Items</h3>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Size</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($cartItems as $cartItem)
			<tr>
				<td>{{$cartItem->name}}</td>
				<td>{{$cartItem->price}}</td>
				<td style="width:50px">
					
					{!!Form::open(['route'=>['cart.update',$cartItem->rowId] ,'method'=>'PUT'])!!}
						<input type="text" value="{{$cartItem->qty}}" name="qty">
						<input type="submit" class="btn btn-sm btn-default" value="OK" >
						
					{!!Form::close()!!}
				
				</td>
				<td>
				{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
				<td>
					<form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input type="submit" class="button" value="Delete">
					</form>
				</td>
			</tr>
		@endforeach

		<tr>
			<td>
				
			</td>
			<td>
				Grand Total: ${{Cart::total()}} <br>
				Tax: ${{Cart::tax()}} <br>
				Sub Total: ${{Cart::subtotal()}}
			</td>
			<td>
				Items: {{Cart::count()}}
			</td>
		</tr>
		</tbody>
	</table>`

	<a href="" class="button btn-success">Checkout</a>
@endsection