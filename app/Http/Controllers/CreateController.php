<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateModel;

class CreateController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'usuario_remedy' => 'required|string|max:255',
            'equipe' => 'required|string',
            'turno' => 'required|string',
            'nivel' => 'required|string',
        ]);

        // Verificar se os dados já existem
        $existingRecord = CreateModel::where('nome', $request->nome)
            ->orWhere('email', $request->email)
            ->orWhere('usuario_remedy', $request->usuario_remedy)
            ->exists();

        if ($existingRecord) {
            return redirect()->back()->withErrors(['error' => 'Nome, e-mail ou usuário Remedy já cadastrado.']);
        }

        // Inserção no banco de dados
        CreateModel::create($request->all());

        return redirect()->back()->with('sucesso', 'Cadastro criado com sucesso.');
    }
}
