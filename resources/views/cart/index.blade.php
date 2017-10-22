@extends('layouts.main_template')
@section('content')
    <h3>Shopping Cart</h3>

    <table>
    	<thead>
    		<tr>
    			<th>Name</th>
    			<th>Price</th>
    			<th>Qty</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($cartItems as $cartItem)
    		<tr>
    			<td>{{$cartItem->name}}</td>
    			<td>${{$cartItem->price}}</td>
    			<td>{{$cartItem->qty}}</td>
    		</tr>
    		@endforeach
    		<tr>
    			<td><b>ORDER TOTAL</b></td>
    			<td><b>${{Cart::total()}}</b></td>
    			<td><b>{{Cart::count()}}</b></td>
    		</tr>
    	</tbody>
    </table>

    <a href="#" class="button btn btn-danger">Checkout</a>
@endsection