<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    
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

    




}
