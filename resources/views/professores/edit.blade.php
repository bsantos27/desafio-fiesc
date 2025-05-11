@extends('layouts.app')

@section('title', 'Editar Professor')

@section('content')
<div class="container">
    <h1>Editar Professor</h1>

    <form action="{{ route('professores.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('professores.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('professores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
