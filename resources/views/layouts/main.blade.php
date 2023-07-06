<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!--fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- CSS da aplicação -->
        <link rel ="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <!-- header -->
        <div style="padding: 0px 50px">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand d-flex align-items-center col-md-4 mb mb-md-0 text-dark text-decoration-none">
                        <svg width="1" height="40" role="img" aria-label="Meu-site">
                        <img src="/img/teste.png" alt="Meu Site">
                        </svg>
                        </a>
                        
                        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                            <li class="nav-item">
                                <a href="/" class="nav-link px-4 link-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/noticias" class="nav-link px-4 link-dark">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a href="/membros" class="nav-link px-4 link-dark">Membros</a>
                            </li>
                            <li class="nav-item">
                                <a href="/sobre-nos" class="nav-link px-4 link-dark">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contatos" class="nav-link px-4 link-dark">Contato</a>
                            </li>
                </nav>
            </header>
        </div>
        <!-- Rodapé da página -->
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
            <p>INFOCORP &copy; 2023</p>
</footer>