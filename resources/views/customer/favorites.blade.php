@extends('layouts.app')

@section('content')

<div class="container py-5">

<h2 class="mb-4">Favorite Meals</h2>

<div class="row">

<div class="col-md-4">
<div class="card shadow">
<img src="{{ asset('img/menu-1.jpg') }}"
class="card-img-top">

<div class="card-body">
<h4>Chicken Burger</h4>
<p>Your Favorite Item</p>
</div>

</div>
</div>

<div class="col-md-4">
<div class="card shadow">
<img src="{{ asset('img/menu-2.jpg') }}"
class="card-img-top">

<div class="card-body">
<h4>Pizza</h4>
<p>Most Ordered</p>
</div>

</div>
</div>

</div>

</div>

@endsection
