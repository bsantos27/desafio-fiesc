@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Aulas</h1>
        <a href="{{ route('aulas.create') }}" class="btn btn-primary">Agendar Aula</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Professor</th>
                    <th>Aluno</th>
                    <th>Data Início</th>
                    <th>Data Fim</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->id }}</td>
                        <td>{{ $aula->descricao }}</td>
                        <td>{{ $aula->professor->nome }}</td>
                        <td>{{ $aula->aluno->nome }}</td>
                        <td>{{ $aula->data_inicio }}</td>
                        <td>{{ $aula->data_fim }}</td>
                        <td>
                            <a href="{{ route('aulas.edit', $aula->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('aulas.destroy', $aula->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
