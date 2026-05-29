<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>QuickServe Foods</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ asset('img/favicon.ico') }}" rel="icon">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

</head>

<body>

@include('partials.navbar')

<div class="container-fluid" style="padding-top:120px;">

    @yield('content')
    
</div>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
