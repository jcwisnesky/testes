<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corretor;
use App\Http\Requests\CorretorFormRequest;

class CorretorController extends Controller
{
    public function index()
    {
        $todosCorretores = Corretor::all();
        return view('index', ['todosCorretores' => $todosCorretores]);
    }

    public function store(CorretorFormRequest $request)
    {
        $corretor = Corretor::create($request->all());

        return redirect()->route('corretors.index')
            ->with('mensagem.sucesso', "Corretor '{$corretor->nome}' adicionado com sucesso");
    }

    public function edit($id)
    {
        $corretor = Corretor::find($id);
        return view('edit', ['corretor' => $corretor]);
    }

public function update(CorretorFormRequest $request, $id)
{
    $corretor = Corretor::find($id);
    $corretor->update($request->all());

    return redirect()->route('corretors.index')
        ->with('mensagem.sucesso', "Corretor '{$corretor->nome}' atualizado com sucesso");
}

    public function destroy($id)
    {
        $corretor = Corretor::find($id);
        $corretor->delete();

        return redirect()->route('corretors.index')
            ->with('mensagem.sucesso', "Corretor '{$corretor->nome}' excluído com sucesso");
    }
}
