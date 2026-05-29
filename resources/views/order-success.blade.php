@extends('layouts.app')

@section('content')

<div class="container py-5 text-center">

<h1 class="text-success">
Order Placed Successfully
</h1>

<a href="{{ route('home') }}"
class="btn btn-primary mt-3">
Back Home
</a>

</div>

@endsection
