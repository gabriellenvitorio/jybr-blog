<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- Fonte do Google --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- CSS do Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        {{-- CSS da Aplicação --}}
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo-jybr.svg" alt="Jinyoung Brasil">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/interviews" class="nav-link">Entrevistas</a>
                    </li>
                    <li class="nav-item">
                        <a href="/dramas" class="nav-link">Dramas</a>
                    </li>
                </ul>
            </div>

            <div id="search-box" class="col-ms-12">
                <form action="">
                  <input type="text" id="search" name="search" class="form-control" placeholder="O que você está procurando?">
                </form>
            </div>

        </nav>
    </header>

    @yield('content')

    <footer>
        <p>Jinyoung Brasil &copy; 2022</p>
    </footer>

    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

    </body>
</html>
