<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка: @yield('title')</title>

    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="/js/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="{{ route('index') }}">Вернуться на сайт</a>
                <div id="nav" class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav">
                        @auth
                        @admin 
                        <li @if(Route::currentRouteNamed('categories.index')) class="active" @endif><a class="nav-link" href="{{ route('categories.index') }}">Категории</a></li>
                        <li @if(Route::currentRouteNamed('categories.index')) class="active" @endif><a class="nav-link" href="{{ route('products.index') }}">Товары</a></li>
{{--                         <li><a class="nav-link" href="#">Свойства</a></li>
                        <li><a class="nav-link" href="#">Купоны</a></li>
                        <li><a class="nav-link" href="#">Поставщики</a></li> --}}
                        <li><a class="nav-link" href="{{ route('home') }}">Заказы</a></li>
                        @endadmin 
                        @endauth
                    </ul>

                    @guest
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
                        </li>
                    </ul>
                    @endguest

                    @auth
                    <ul class="navbar-nav ml-auto">
{{--                         <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Панель администратора</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('get-logout')}}">Выйти</a>
                        </li>
                    </ul>
                        @endauth
                    {{-- @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            @admin Администратор @else {{ Auth::user()->name }} @endadmin
                        </a>

                        <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout')}}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        @endauth --}}
    </div>
</div>
</nav>

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
</div>
</body>
</html>