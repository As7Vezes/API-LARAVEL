@extends('base')
@section('conteudo')
    <p>Codigo: {{ $produto->codigo }}</p>
    <p>Descricao: {{ $produto->descricao }}</p>
    <p>Custo de produção: {{ $produto->custoProducao }}</p>
    <p>Unidade: {{ $produto->unidade }}</p>
    <p>Quantidade: {{ $produto->quantidadeEstoque }}</p>
    <form action="/produtos/{{ $produto->id }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Deletar">
    </form>
@endsection