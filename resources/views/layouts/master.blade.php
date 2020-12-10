<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
            <a class="navbar-brand" href="{{route('index')}}"><ion-icon size="40px" name="bag-outline"></ion-icon> Магазин</a>
            <div id="nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @routeactive('index')><a class="nav-link" href="{{route('index')}}">Все товары</a></li>
                    <li @routeactive('categor*')><a class="nav-link" href="{{route('categories')}}">Категории</a></li>
                    <li @routeactive('basket*')><a class="nav-link" href="{{route('basket')}}">В корзину</a></li>
                    <li><a class="nav-link" href="{{'reset'}}">Сбросить проект</a></li>
{{--                     <li><a class="nav-link" href="http://internet-shop.tmweb.ru/locale/en">en</a>
                    </li> --}}
                </ul>
               {{--  <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                            <li><a class="dropdown-item" href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                            <li><a class="dropdown-item" href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                        </ul>
                    </li>
                </ul> --}}
                @guest
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link"  href="{{route('login')}}">Войти</a></li>
                </ul>
                @endguest
                    @auth
                    @admin
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="{{route('home')}}">Панель администратора</a></li>
                </ul>
                    @else
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="{{route('person.orders.index')}}">Мои заказы</a></li>
                </ul>
                    @endadmin
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link" href="{{route('get-logout')}}">Выйти</a></li>
                    </ul>
                    @endauth

            </div>
        </div>
    </nav>
    <div class="container">
        
        <div class="starter-template">
            @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success')}}</p>
            @endif
            @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning')}}</p>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>