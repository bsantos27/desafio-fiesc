@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
<div class="container">
    <h1 class="mb-4">Alunos</h1>

    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Novo Aluno</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->cpf }}</td>
                <td>{{ \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') }}</td>
                <td>{{ $aluno->email }}</td>
                <td>
                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja realmente excluir este aluno?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Nenhum aluno encontrado.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
