<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <!-- css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{--  navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-dark admin-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }} - 管理後台</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">後台</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">前台</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{--  hero image  --}}
    <header class="container-fluid hero-to-text">
        <div class="mask"></div>
        <div class="col-lg-8 col-md-12 mx-auto">
            <h1 class="text-center mb-2">@yield('title')</h1>
            <h2 class="text-center">@yield('subTitle')</h2>
        </div>
    </header>

    {{--  content  --}}
    @section('content')
    @show

    {{--  footer  --}}
    <footer>
        <p class="text-center">Copyright &copy; {{ env('APP_NAME') }} 2020</p>
    </footer>

    <!--js-->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
