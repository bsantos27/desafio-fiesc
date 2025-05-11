<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|unique:professores',
            'data_nascimento' => 'required|date',
            'especialidade' => 'required|string|max:255',
            'status' => 'required|in:ativo,inativo',
        ]);

        Professor::create($request->all());

        return redirect()->route('professores.index')->with('success', 'Professor cadastrado com sucesso.');
    }

    public function show(Professor $professor)
    {
        return view('professores.show', compact('professor'));
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|unique:professores,cpf,' . $professor->id,
            'especialidade' => 'required|string|max:255',
            'status' => 'required|in:ativo,inativo',
        ]);

        $professor->update($request->all());

        return redirect()->route('professores.index')->with('success', 'Professor atualizado com sucesso.');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professores.index')->with('success', 'Professor removido com sucesso.');
    }
}
