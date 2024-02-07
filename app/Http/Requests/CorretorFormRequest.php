<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CorretorFormRequest extends FormRequest
{

    public function rules()
    {
        $corretorId = $this->route('id'); // Get the id from the route parameters

        return [
            'cpf' => ['required', 'size:11', Rule::unique('corretors')->ignore($corretorId)],
            'creci' => 'required|min:2',
            'nome' => 'required|min:2|not_in:André Nunes',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.size' => 'O CPF deve ter exatamente 11 caracteres.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'creci.required' => 'O campo Creci é obrigatório.',
            'creci.min' => 'O Creci deve ter pelo menos 2 caracteres.',
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.min' => 'O Nome deve ter pelo menos 2 caracteres.',
            'nome.not_in' => 'O usuário está na blacklist.',
        ];
    }
}
