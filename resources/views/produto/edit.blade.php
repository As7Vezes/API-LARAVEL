@extends('base')
@section('conteudo')
    <form action="/produtos/{{ $produto->id }}" method="post">
        @method('put')
        @csrf
        <p>Descricao: <input type="text" name="descricao" value="{{ $produto->descricao }}"></p>
        <p>Custo de produção: <input type="text" name="custoProducao" value="{{ $produto->custoProducao }}"></p>
        <p>Unidade: <input type="text" name="unidade" value="{{ $produto->unidade }}"></p>
        <p>Quantidade: <input type="text" name="quantidadeEstoque" value="{{ $produto->quantidadeEstoque }}"></p>
        <input type="submit" value="Editar">
    </form>
@endsection
