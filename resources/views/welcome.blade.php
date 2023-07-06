@extends('layouts.main')

@section('title', 'INFOCORP')

@section('content')
    <!-- DESNECESSÁRIO
    @foreach($noticias as $Noticia)
        <p>{{ $Noticia->titulo}} -- {{$Noticia->resumo}}</p>
    @endforeach 
    -->
    <div id="homepage-description">
        <div id="homepage-description-text">
            <h1>Arquitetura na Prática</h1>
            <p>Experiencie a arquitetura no dia-a-dia durante a graduação</p>
        </div>
    </div>
    <div id="membros-carrossel">
        <h1>
            Nossos Membros
        </h1>
        <div class="d-flex justify-content-center">
            <div class="carrossel-items">
                <button class="previous"></button>
                <ul>
                    <li>
                        <!-- foreach($membros as $Membro)-->
                        <a href="/">
                                <img class="circle" src="/img/interior-teste.jpg">
                        </a>
                    </li>
                    <!-- endforeach -->
                    <!-- as <li> restantes são apenas para verificar como ficariam diversas encaixadas no mesmo bloco -->
                    <li>
                            <a href="/">
                                <img class="circle" src="/img/interior-teste.jpg"> 
                            </a>
                    </li>
                    <li>
                            <a href="/">
                                <img class="circle" src="/img/interior-teste.jpg"> 
                            </a>
                    </li>
                    <li>
                            <a href="/">
                                <img class="circle" src="/img/interior-teste.jpg"> 
                            </a>
                    </li>
                </ul>
                <button class="next"></button>
            </div>
        </div>
    </div>
    <div id="noticias-container" class="col-md-12">
        <h2>Últimas Notícias</h2>
        <div id="cards-container" class="row">
            @foreach($noticias as $noticia)
                    <div class="card col-md-3">
                        <img src="/storage/{{ $noticia->imagem }}" alt="Imagem de noticia">
                        <div class="card-body">
                            <p class="card-date">10/09/2020</p>
                            <h5 class="card-title">{{ $noticia ->titulo}}</h5>
                            <p class="card-text">{{ $noticia ->resumo}}</p>
                            <a href="/noticias/{{ $noticia->id }}" class="btn btn-primary">Saber Mais</a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection