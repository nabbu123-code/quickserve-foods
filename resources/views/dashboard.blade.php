@extends('layouts.app')

@section('content')

<div class="container py-5">

```
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold text-primary">
        Welcome to QuickServe Foods
    </h1>

    <p class="lead">
        Manage your orders, reservations and account from one place.
    </p>
</div>

<div class="row g-4">

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="fa fa-shopping-cart fa-3x text-warning mb-3"></i>
                <h4>My Orders</h4>
                <a href="{{ route('customer.orders') }}"
                   class="btn btn-warning mt-2">
                    View Orders
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="fa fa-user fa-3x text-primary mb-3"></i>
                <h4>Profile</h4>
                <a href="{{ route('customer.profile') }}"
                   class="btn btn-primary mt-2">
                    My Profile
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="fa fa-heart fa-3x text-danger mb-3"></i>
                <h4>Favorites</h4>
                <a href="{{ route('customer.favorites') }}"
                   class="btn btn-danger mt-2">
                    Favorites
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="fa fa-gift fa-3x text-success mb-3"></i>
                <h4>Loyalty Points</h4>
                <a href="{{ route('customer.loyalty') }}"
                   class="btn btn-success mt-2">
                    View Rewards
                </a>
            </div>
        </div>
    </div>

</div>

<div class="card shadow border-0 mt-5">
    <div class="card-body text-center p-5">

        <h2 class="mb-3">
            You're Logged In Successfully
        </h2>

        <p class="text-muted">
            Enjoy delicious meals, reserve tables, track orders and earn rewards with QuickServe Foods.
        </p>

        <a href="{{ route('menu') }}"
           class="btn btn-warning btn-lg">
            Order Food Now
        </a>

    </div>
</div>
```

</div>

@endsection
