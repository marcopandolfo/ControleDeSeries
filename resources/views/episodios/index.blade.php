@extends('layout')

@section('cabecalho')
    Episodios
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach($episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Episodio {{ $episodio->numero }}
            </li>
        @endforeach
    </ul>
@endsection
