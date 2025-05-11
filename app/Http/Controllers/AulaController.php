<?php
// app/Http/Controllers/AulaController.php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Professor;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    // Método para exibir o formulário de criação de aula
    public function create()
    {
        // Busca todos os professores e alunos do banco de dados
        $professores = Professor::all();
        $alunos = Aluno::all();  // Caso queira passar também a lista de alunos

        // Passa os dados para a view
        return view('aulas.create', compact('professores', 'alunos'));
    }

    // Método para exibir todas as aulas
    public function index()
    {
        // Busca todas as aulas do banco de dados
        $aulas = Aula::all();

        // Passa os dados para a view
        return view('aulas.index', compact('aulas'));
    }

    // Método para salvar os dados da aula no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados recebidos no formulário
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'professor_id' => 'required|exists:professores,id',
            'aluno_id' => 'required|exists:alunos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
        ]);

        // Cria uma nova aula com os dados validados
        $aula = new Aula();
        $aula->nome = $validated['nome'];
        $aula->descricao = $validated['descricao'];
        $aula->professor_id = $validated['professor_id'];
        $aula->aluno_id = $validated['aluno_id'];
        $aula->data_inicio = $validated['data_inicio'];
        $aula->data_fim = $validated['data_fim'];
        $aula->save();

        // Redireciona para a página de listagem de aulas
        return redirect()->route('aulas.index')->with('success', 'Aula criada com sucesso!');
    }
}
