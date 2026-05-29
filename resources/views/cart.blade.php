@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Your Cart</h1>

<table class="table">

<tr>
<th>Name</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>
<th></th>
</tr>

@php $grand = 0; @endphp

@foreach($cart as $id => $item)

@php
$total = $item['price'] * $item['quantity'];
$grand += $total;
@endphp

<tr>

<td>{{ $item['name'] }}</td>

<td>${{ $item['price'] }}</td>

<td>

<form action="{{ route('cart.update',$id) }}"
method="POST">

@csrf

<input type="number"
name="quantity"
value="{{ $item['quantity'] }}"
min="1">

<button class="btn btn-sm btn-primary">
Update
</button>

</form>

</td>

<td>${{ $total }}</td>

<td>

<a href="{{ route('cart.remove',$id) }}"
class="btn btn-danger">
Remove
</a>

</td>

</tr>

@endforeach

</table>

<h2>Total: ${{ $grand }}</h2>

<a href="{{ route('checkout') }}"
class="btn btn-success">
Checkout
</a>

</div>

@endsection
