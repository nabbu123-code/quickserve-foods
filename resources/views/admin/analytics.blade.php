@extends('layouts.app')

@section('content')

<div class="container py-5">

<h2>Analytics Dashboard</h2>

<div class="row">

<div class="col-md-3">
<div class="card p-3">
<h4>Total Users</h4>
<h2>{{ $totalUsers }}</h2>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<h4>Total Orders</h4>
<h2>{{ $totalOrders }}</h2>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<h4>Revenue</h4>
<h2>₹{{ $totalRevenue }}</h2>
</div>
</div>

<div class="col-md-3">
<div class="card p-3">
<h4>Reservations</h4>
<h2>{{ $totalReservations }}</h2>
</div>
</div>

</div>

</div>

@endsection
