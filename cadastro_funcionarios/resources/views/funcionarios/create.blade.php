@extends('layouts.layout')

@section('title', 'listagem')

@section('content')

<div class="container">
    <h1>Adicione um novo funcionário</h1>
    <hr>
    <form action="{{ route('funcionarios-store') }}" method="POST">
        @csrf
        <div class="form-group">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="form-group">
                <label for="nome">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Digite seu email">
            </div>

            <div class="form-group">
                <label for="nome">Telefone:</label>
                <input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

@endsection