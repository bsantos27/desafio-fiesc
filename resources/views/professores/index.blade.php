@extends('layouts.app')

@section('title', 'Lista de Professores')

@section('content')
<div class="container">
    <h1 class="mb-4">Professores</h1>

    <a href="{{ route('professores.create') }}" class="btn btn-primary mb-3">Novo Professor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>CPF</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($professores as $professor)
            <tr>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->especialidade }}</td>
                <td>{{ $professor->cpf }}</td>
                <td>{{ $professor->status }}</td>
                <td>
                    <a href="{{ route('professores.edit', $professor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('professores.destroy', $professor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja realmente excluir este professor?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Nenhum professor encontrado.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
