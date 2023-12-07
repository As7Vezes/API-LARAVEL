@extends('base')
@section('conteudo')
    @foreach($ProdutoCollection as $produto)
        <p>Codigo: {{ $produto->codigo }}</p>
        <p>Descricao: {{ $produto->descricao }}</p>
        <p>Custo de produção: {{ $produto->custoProducao }}</p>
        <p>Unidade: {{ $produto->unidade }}</p>
        <p>Quantidade: {{ $produto->quantidadeEstoque }}</p>
        <hr>
    @endforeach

    {{$ProdutoCollection->links()}}
@endsection