@extends('layouts.main')

@section('title', 'INFOCORP')

@section('content')
    <h1> OI XD MEMBROS LISTA</h1>
    @if($id != null)
        <p> olha: {{ $id }} </p>
    @endif
    @if($busca !='')
        <p>Resultados com:  {{ $busca }}
    @endif
@endsection