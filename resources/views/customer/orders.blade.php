@extends('layouts.app')

@section('content')
<table class="table table-striped">

<thead>
<tr>
<th>#</th>
<th>Food</th>
<th>Date</th>
<th>Amount</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>1001</td>
<td>Chicken Biryani</td>
<td>29 May 2026</td>
<td>$25</td>
<td>
<span class="badge bg-success">
Delivered
</span>
</td>
</tr>

<tr>
<td>1002</td>
<td>Pizza Combo</td>
<td>30 May 2026</td>
<td>$18</td>
<td>
<span class="badge bg-warning">
Preparing
</span>
</td>
</tr>

</tbody>

</table>

@endsection
