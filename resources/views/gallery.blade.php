@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Gallery</h1>

<div class="row">

<div class="col-md-4">
<img src="{{ asset('img/about-1.jpg') }}" class="img-fluid">
</div>

<div class="col-md-4">
<img src="{{ asset('img/about-2.jpg') }}" class="img-fluid">
</div>

</div>

</div>

@endsection
