<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- <div class="textTitleContainer"> -->
    <title>LearningWorks</title>
    <!-- </div> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="container-fluid">
    <div class="row">
        @if (Route::has('login'))
        <nav class="col-sm-12 navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="">LearningWorks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/comingEvents') }}">Coming Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/pastEvents') }}">Past Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/createEvents') }}" class="nav-link">Create Event</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/comingEvents') }}">Coming Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/pastEvents') }}">Past Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                @if (Route::has('register'))
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                @endif
                @endauth
            </div>
            @endif
        </nav>
    </div>
    <br>
    <br>

    <div id="boxPrincipalTitle">
        <div class="row">
            <div class="col-sm-12">
                <div id="principalTitle">LearningWorks</div>
                <div id="entracePicture">
                    <img class="img-fluid" src="https://www.networkworld.es/archivos/201810/concert-2527495-960-720.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="row" id="containerEvents">
        <div class="col-sm-12 align-middle">
            <h2>Hightlight Events</h2>
        </div>
        <div class="card-group">
            <div class="card">
                <img src="https://assets.afcdn.com/story/20200407/2047265_w980h638c1cx1061cy707cxt0cyt0cxb2121cyb1414.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOP 1</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZuHF-19pxz3PI_PMWtRutpzXkOsJSriGxwA&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOP 2</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOP 3</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOP 4</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TOP 5</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- <div class="row" id="containerEvents">
        <div class="col-sm-12 align-middle">
            <h2>Hightlight Events</h2>
        </div>
        <div id="cardEvents" class="col-sm-12">
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://assets.afcdn.com/story/20200407/2047265_w980h638c1cx1061cy707cxt0cyt0cxb2121cyb1414.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZuHF-19pxz3PI_PMWtRutpzXkOsJSriGxwA&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.avancecomunicacion.com/wp-content/uploads/2018/02/cab-eventos-y-marketing.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="col-sm-12">
        <div clas="row">
            <div class="col-sm-12">
                <h2>Coming Events</h2>
            </div>
            <div class="col-ms-12 mb-4" id="containerBoxFuture">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/34/07/e2/3407e2a758c770b90ab39008a0965409.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Coming Events</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ url('/comingEvents') }}" class="btn btn-primary">Go Coming Events</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>Past Events</h2>
            </div>
            <div class="col-sm-12 mb-4" id="containerBoxPast">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ytimg.com/vi/J6gZCjsH3gE/hqdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Past Events</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ url('/pastEvents') }}" class="btn btn-primary">Go Past Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @extends('layouts.footer')
</body>

</html>