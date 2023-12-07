@extends('base')
@section('conteudo')
    <form action="/produtos" method="post">
        @csrf
        <p>Codigo: <input type="text" name="codigo"></p>
        <p>Descricao: <input type="text" name="descricao"></p>
        <p>Custo de produção: <input type="text" name="custoProducao"></p>
        <p>Unidade: <input type="text" name="unidade"></p>
        <p>Quantidade: <input type="text" name="quantidadeEstoque"></p>
        <input type="submit" value="Cadastrar">
    </form>
@endsection