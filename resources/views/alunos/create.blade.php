@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')
<div class="container">
    <h1>Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        @include('alunos.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
