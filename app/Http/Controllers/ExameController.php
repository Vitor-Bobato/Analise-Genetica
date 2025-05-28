<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exame;

class ExameController extends Controller
{
    // Exibe todos os exames cadastrados
    public function index()
    {
        $exames = Exame::orderBy('created_at', 'desc')->get();
        return view('exames.index', compact('exames'));
    }

    // Exibe o formulário de cadastro
    public function create()
    {
        return view('exames.create');
    }

    // Processa o cadastro
    public function store(Request $request)
    {
        $validated = $request->validate([
            'paciente' => 'required|string|max:100',
            'exame_id' => 'required|alpha_num|unique:exames,exame_id',
            'tipo' => 'required|in:Sequenciamento,PCR,Microarray',
            'data_coleta' => 'required|date|before_or_equal:today',
            'laudo' => 'nullable|string|max:500',
        ], [
            'paciente.required' => 'O nome do paciente é obrigatório.',
            'paciente.max' => 'O nome do paciente deve ter no máximo 100 caracteres.',
            'exame_id.required' => 'O número do exame é obrigatório.',
            'exame_id.alpha_num' => 'O número do exame deve ser alfanumérico.',
            'exame_id.unique' => 'Este número de exame já está cadastrado.',
            'tipo.required' => 'O tipo de exame é obrigatório.',
            'tipo.in' => 'Tipo de exame inválido.',
            'data_coleta.required' => 'A data de coleta é obrigatória.',
            'data_coleta.date' => 'Data de coleta inválida.',
            'data_coleta.before_or_equal' => 'A data de coleta não pode ser no futuro.',
            'laudo.max' => 'O laudo deve ter no máximo 500 caracteres.',
        ]);

        Exame::create($validated);

        return redirect()->route('exames.index')->with('success', 'Exame cadastrado com sucesso!');
    }
}