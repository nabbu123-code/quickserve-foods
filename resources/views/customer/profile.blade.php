@extends('layouts.app')

@section('content')

<div class="container py-5">

<div class="card shadow">
<div class="card-body">

<h2 class="mb-4">My Profile</h2>

<p><strong>Name:</strong> {{ Auth::user()->name }}</p>

<p><strong>Email:</strong> {{ Auth::user()->email }}</p>

<p><strong>Member Since:</strong> {{ Auth::user()->created_at }}</p>

<a href="{{ route('customer.orders') }}"
class="btn btn-primary">
My Orders </a>

</div>
</div>

</div>

@endsection
