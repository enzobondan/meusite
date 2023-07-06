@extends('layouts.main')

@section('title', $noticia->titulo)

@section('content')
    <p>sexo</p>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/storage/{{ $noticia->imagem }}" class="img-fluid" alt="{{ $noticia->titulo }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $noticia-> titulo }} </h1>
                <p class="noticia-texto">{{ $noticia->texto}}</p>
            </div>
        </div>
    </div>

@endsection