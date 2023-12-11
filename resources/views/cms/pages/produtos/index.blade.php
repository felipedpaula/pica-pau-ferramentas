@extends('cms.layouts.cms-default')
@section('content')
<a href="{{route('admin.produto.create')}}" class="btn btn-success mb-3">Criar Novo Produto</a>
<div class="row">
    @if (isset($allProdutos) && !empty($allProdutos))
    <ul class="list-group col-12">
        <!-- Cabeçalho da Lista -->
        <li class="list-group-item">
            <div class="row font-weight-bold flex-nowrap overflow-auto">
            <div class="col-lg-3">Nome do produto</div>
            <div class="col-lg-1">Categoria</div>
            <div class="col-lg-3">Descrição</div>
            <div class="col-lg-2">Preço</div>
        </li>

        @foreach ($allProdutos as $produto)
        <!-- Item da Lista -->
        <li class="list-group-item">
        <div class="row flex-nowrap overflow-auto">
            <div class="col-lg-3">{{$produto->name}}</div>
            <div class="col-lg-1">{{$produto->category_id}}</div>
            <div class="col-lg-3">{{$produto->description}}</div>
            <div class="col-lg-2">R$ {{$produto->price}}</div>
            <div class="col-lg-3">
                <a href="{{ route('admin.produto.edit', ['slug' => $produto->slug]) }}" class="btn btn-primary btn-sm">Editar</a>
            </div>
        </div>
        </li>
        @endforeach
    </ul>
    {{-- {{ $allProdutos->links() }} --}}
    @else
        <p>Não existem produtos cadastrados.</p>
    @endif
</div>
@endsection
