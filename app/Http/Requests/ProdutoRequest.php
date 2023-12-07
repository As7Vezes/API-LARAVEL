<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize(): bool
     {
        return true;
    }

    public function rules(): array  
    {

        return [
            'id' => 'required|integer|max:50',
            'codigo' => 'required|max:60',
            'descricao' => 'required|max:500',
            'custoProducao' => 'required|numeric|between:1,10000000000',
            'unidade' => 'required|between:1,10000000000000',
            'quantidadeEstoque' => 'required|numeric|between:0,10000000',
        ];

    }

    public function messages(): array {

        return [
            'id.required' => 'ID é obrigatória',
            'id.max' => 'ID máximo 50 caracteres',
            'codigo' => 'Código obrigatório, máximo 60 caracteres',
            'descricao' => 'Descrição obrigatória, máximo 500 caracteres',
            'custoProducao' => 'Custo de Produção obrigatória, números entre 1 e R$100.000.000,00',
            'unidade' => 'Unidade obrigatória, número entre 1 e 10000000000000',
            'quantidadeEstoque' => 'Quantidade no Estoque obrigatória, numero entre 0 e 10000000',
        ];

    }
}
