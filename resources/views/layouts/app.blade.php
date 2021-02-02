<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/authenticate.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg  bg-dark">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar brand">
                    Programador De Eventos
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('events.create')}}" class="nav-link">Criar eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link"> Logar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link"> Faça seu cadastro</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        Produzido por <a href="">Giuliano Criscuoli</a> 
    </footer>

    <script src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>