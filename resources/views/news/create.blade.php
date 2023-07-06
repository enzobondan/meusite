@extends('layouts.main')

@section('title', 'INFOCORP')

@section('content')

    <div id="noticias-create-container" class="col-md-6 offset-md-3">
        <h1>Crie uma notícia</h1>
        <form action="/noticias" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Notícia:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome da notícia">
            </div>
            <div class="form-group">
                <label for="text">Resumo:</label>
                <textarea type="text" class="form-control" id="resumo" name="resumo" placeholder="Resumo da Notícia"></textarea>
            </div>
            <div class="form-group">
                <label for="text">Texto:</label>
                <textarea name="texto" id="texto" class="form-control" placeholder="Descrição da Notícia"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem" style="margin-top: 10px;">
            </div>
            <input type="submit" class="btn btm-primary" value="Criar Notícia">   
        </form>
    </div>
@endsection