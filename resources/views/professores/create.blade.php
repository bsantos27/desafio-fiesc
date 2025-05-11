@extends('layouts.app')

@section('title', 'Novo Professor')

@section('content')
<div class="container">
    <h1>Novo Professor</h1>

    <form action="{{ route('professores.store') }}" method="POST">
        @csrf
        @include('professores.form')
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('professores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
