@extends('layout')

@section('cabecalho')
    Cadastro de Séries
@endsection

@section('conteudo')
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome">

            <button class="btn btn-primary mt-2">Adicionar</button>
        </div>
    </form>
@endsection
