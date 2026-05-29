@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Order Management</h1>

<table class="table table-striped">

<tr>
<th>Order ID</th>
<th>Customer</th>
<th>Amount</th>
<th>Status</th>
</tr>

<tr>
<td>#1001</td>
<td>John</td>
<td>$50</td>
<td>
<span class="badge bg-success">
Delivered
</span>
</td>
</tr>

<tr>
<td>#1002</td>
<td>David</td>
<td>$30</td>
<td>
<span class="badge bg-warning">
Preparing
</span>
</td>
</tr>

</table>

</div>

@endsection
