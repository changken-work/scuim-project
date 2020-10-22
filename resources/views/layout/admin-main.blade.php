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
                    @can('admins')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">使用者管理</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.viewLogsList') }}">瀏覽紀錄管理</a>
                        </li>
                    @endcan
                    @canany(['admins', 'vendors'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                車款管理
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('car.index') }}">車款列表</a>
                                @can('vendors')
                                <a class="dropdown-item" href="{{ route('car.create') }}">新增車款</a>
                                @endcan
                            </div>
                        </li>
                    @endcanany
                    @can('factories')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                簽署管理
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.repairLogsList') }}">簽署紀錄列表</a>
                                <a class="dropdown-item" href="{{ route('admin.signRepairLogs') }}">簽署車況維護紀錄</a>
                            </div>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">前台</a>
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
