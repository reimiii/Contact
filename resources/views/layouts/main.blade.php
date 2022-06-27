<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Contact')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="{{ route('contact') }}">
            <strong>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-toggler">
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item"><a href="#" class="nav-link">Companies</a></li>--}}
{{--                <li class="nav-item active"><a href="#" class="nav-link">Contacts</a></li>--}}
{{--            </ul>--}}

        </div>
    </div>
</nav>

<!-- content -->
<main class="py-5">
    @yield('content')
</main>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
