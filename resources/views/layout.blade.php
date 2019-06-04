<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/top') }}">
                けいじばん
            </a>
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="{{ route('logout') }}">ログアウト</a></li>
                @else
                <li><a href="{{route('signup')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 新規登録</a></li>
                <li><a href="{{route('login')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ログイン</a></li>
                @endif
                </ul>
            <!-- </div> -->
        </div>
        
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>