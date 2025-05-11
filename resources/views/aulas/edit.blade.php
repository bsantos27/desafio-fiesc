@extends('layouts.app')

@section('title', 'Editar Aula')

@section('content')
<div class="container">
    <h1>Editar Aula</h1>

    <form action="{{ route('aulas.update', $aula->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('aulas.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
