<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('build/assets/app-3ea8b221.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div  id="navbarNav">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('main.index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lot.index')}}">Lots</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.index')}}">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index')}}">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>
