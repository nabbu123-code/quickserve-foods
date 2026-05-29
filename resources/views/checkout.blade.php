@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Checkout</h1>

<table class="table">

<tr>
<th>Name</th>
<th>Price</th>
<th>Qty</th>
</tr>

@foreach($cart as $item)

<tr>
<td>{{ $item['name'] }}</td>
<td>${{ $item['price'] }}</td>
<td>{{ $item['quantity'] }}</td>
</tr>

@endforeach

</table>

<form action="{{ route('place.order') }}"
method="POST">

@csrf

<button class="btn btn-primary">
Place Order
</button>

</form>

</div>

@endsection
