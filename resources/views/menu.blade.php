@extends('layouts.app')

@section('content')

<div class="container py-5">

```
<h1 class="mb-4">Our Menu</h1>

<div class="row">

    <!-- Chicken Burger -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/menu-1.jpg') }}"
                 class="card-img-top"
                 style="height:300px; object-fit:cover;">

            <div class="card-body">
                <h4>Chicken Burger</h4>
                <p>$15</p>

                <form action="{{ route('cart.add',1) }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="btn btn-warning w-100">
                        Add To Cart
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Pizza -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/menu-2.jpg') }}"
                 class="card-img-top"
                 style="height:300px; object-fit:cover;">

            <div class="card-body">
                <h4>Pizza</h4>
                <p>$20</p>

                <form action="{{ route('cart.add',2) }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="btn btn-warning w-100">
                        Add To Cart
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Pasta -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/menu-3.jpg') }}"
                 class="card-img-top"
                 style="height:300px; object-fit:cover;">

            <div class="card-body">
                <h4>Pasta</h4>
                <p>$18</p>

                <form action="{{ route('cart.add',3) }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="btn btn-warning w-100">
                        Add To Cart
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
```

</div>

@endsection
