<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json(['produtos' => $produtos]);
    }

    public function show(Produto $produto)
    {
        return response()->json(['produto' => $produto]);
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json(['produto' => $produto], Response::HTTP_CREATED);
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json(['produto' => $produto]);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}