@extends('layout')

@section('cabecalho')
    Lista de Séries
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item" style="display: flex; justify-content: space-between;">
                <div style="align-self: center;">
                    {{ $serie->nome }}
                </div>

                <form
                    method="POST"
                    action="/series/{{ $serie->id }}"
                    onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }} ?')"
                >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
