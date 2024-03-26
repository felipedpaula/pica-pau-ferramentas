@extends('cms.layouts.cms-default')
@section('content')

    <div class="row mb-4">
        <div class="col-md-8">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar
            </a>
        </div>
        <div class="col-md-4"></div>
    </div>

    <!-- ALERTAS -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> Algo não deu certo:
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- FIM ALERTAS -->

    <div class="row">
        <div class="col-md-8 d-flex">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar produto" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{route('admin.produto.create')}}" class="btn btn-primary" type="button">+ Novo produto</a>
        </div>
    </div>

    <div class="row mt-4">
        @if (isset($allProdutos) && count($allProdutos) > 0)
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
                    <a href="{{ route('admin.produto.edit', ['id' => $produto->id]) }}" class="btn btn-primary btn-sm">Editar</a>
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
