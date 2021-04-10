<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <!-- <div id="app">
            <div style="background-color: #343a40;"></div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto"> -->
                        @php $locale = session()->get('locale'); @endphp
                        <div class="develop">
                        <ul>
                        <li><a href="en">EN</a></li>
                        <li><a href="ru">RU</a></li>
                        <li><a href="kz">KZ</a></li>
                        </ul>
                        </div>
                        <!-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false" v-pre>
                            @switch($locale)
                            @case('en')
                                <img width ="20" src="asset{{'img/en.png'}}" alt="unknown">English
                            @break 
                            @case('en')
                                <img width ="20" src="asset{{'img/kz.png'}}" alt="unknown">Kazakh
                            @break 
                            @case('ru')
                                <img width ="20" src="asset{{'img/ru.png'}}" alt="unknown">Russian
                            @break 
                            @default
                            <img width="20" src="{{asset('img/en.png')}}" alt="unknown">English
                            @endswitch
                            <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/en.png')}}" alt="unknown">English</a><br>
                            <a class="dropdown-item" href="kz"><img width="20" src="{{asset('img/kz.png')}}" alt="unknown">Kazakh</a><br>
                            <a class="dropdown-item" href="ru"><img width="20" src="{{asset('img/ru.png')}}" alt="unknown">Russian</a><br>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> -->
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>