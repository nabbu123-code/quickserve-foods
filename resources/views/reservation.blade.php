@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1>Book A Table</h1>

<form action="{{ route('reservation.store') }}" method="POST">
    @csrf

    <div class="row g-3">

        <div class="col-md-12">
            <input type="text"
                   name="name"
                   class="form-control"
                   placeholder="Your Name"
                   required>
        </div>

        <div class="col-md-4">
            <input type="date"
                   name="date"
                   class="form-control"
                   required>
        </div>

        <div class="col-md-4">
            <input type="time"
                   name="time"
                   class="form-control"
                   required>
        </div>

        <div class="col-md-4">
            <input type="number"
                   name="guests"
                   class="form-control"
                   placeholder="Guests"
                   min="1"
                   required>
        </div>

        <div class="col-12">
            <button type="submit"
                    class="btn btn-success w-100">
                Reserve Table
            </button>
        </div>

    </div>
</form>

</div>

@endsection
