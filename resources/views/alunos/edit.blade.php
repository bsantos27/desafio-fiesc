@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
<div class="container">
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('alunos.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
