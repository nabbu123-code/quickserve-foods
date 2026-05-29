@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1 class="mb-4">Admin Dashboard</h1>

<div class="row g-4">

<div class="col-md-3">
<div class="card bg-primary text-white">
<div class="card-body text-center">
<h5>Total Orders</h5>
<h2>250</h2>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bg-success text-white">
<div class="card-body text-center">
<h5>Total Revenue</h5>
<h2>$12,500</h2>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bg-warning">
<div class="card-body text-center">
<h5>Customers</h5>
<h2>125</h2>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card bg-danger text-white">
<div class="card-body text-center">
<h5>Reservations</h5>
<h2>48</h2>
</div>
</div>
</div>

</div>

</div>

@endsection
