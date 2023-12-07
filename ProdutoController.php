<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return View('produto.index')->with('ProdutoCollection', Produto::all());
        return View('produto.index')->with('ProdutoCollection', Produto::paginate(4));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produto::create( $request->all() );

        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return View('produto.show')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return View('produto.edit')->with('produto', $produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update( $request->all() );

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect('/produtos');
    }

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
