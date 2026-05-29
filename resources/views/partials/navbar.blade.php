<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">


<a href="{{ route('home') }}" class="navbar-brand p-0">
    <h1 class="text-primary m-0">
        <i class="fa fa-utensils me-3"></i>
        QuickServe Foods
    </h1>
</a>

<button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">

    <div class="navbar-nav ms-auto py-0 pe-4">

        <a href="{{ route('home') }}" class="nav-item nav-link">
            Home
        </a>

        <a href="{{ route('about') }}" class="nav-item nav-link">
            About
        </a>

        <a href="{{ route('menu') }}" class="nav-item nav-link">
            Menu
        </a>

       <a href="{{ route('offers') }}" class="nav-item nav-link">
    Offers
</a>
        <a href="{{ route('gallery') }}" class="nav-item nav-link">
            Gallery
        </a>

        <a href="{{ route('reservation') }}" class="nav-item nav-link">
            Reservation
        </a>

        <a href="{{ route('contact') }}" class="nav-item nav-link">
            Contact
        </a>

        @guest

            <a href="{{ route('login') }}" class="nav-item nav-link">
                Login
            </a>

            <a href="{{ route('register') }}" class="nav-item nav-link">
                Register
            </a>

        @endguest

        @auth

            <a href="{{ route('dashboard') }}" class="nav-item nav-link">
                Dashboard
            </a>

        @endauth

    </div>

    <a href="{{ route('reservation') }}"
       class="btn btn-primary py-2 px-4 me-2">
        Book A Table
    </a>

    @auth

    <form method="POST"
          action="{{ route('logout') }}"
          class="d-inline">
        @csrf

        <button type="submit"
                class="btn btn-danger">
            Logout
        </button>
    </form>

    @endauth

</div>


</nav>
