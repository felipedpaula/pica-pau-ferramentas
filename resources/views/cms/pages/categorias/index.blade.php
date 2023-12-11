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
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar categoria" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{route('admin.categoria.create')}}" class="btn btn-primary" type="button">+ Nova categoria</a>
        </div>
    </div>

    <div class="row mt-4">
        @if (isset($allCategorias) && !empty($allCategorias))
            <ul class="list-group col-12">
                <!-- Cabeçalho da Lista -->
                <li class="list-group-item">
                    <div class="row font-weight-bold flex-nowrap overflow-auto">
                    <div class="col-lg-3">Nome</div>
                    <div class="col-lg-3">Categoria pai</div>
                    <div class="col-lg-3">Ações</div>
                    </div>
                </li>

                @foreach ($allCategorias as $categoria)
                <!-- Item da Lista -->
                <li class="list-group-item">
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-lg-3">{{$categoria->name}}</div>
                    <div class="col-lg-3">{{$categoria->parent_category_id}}</div>
                    <div class="col-lg-3">
                        <a href="{{route('admin.categoria.edit', ['id' => $categoria->id])}}" class="btn btn-primary btn-sm">Editar</a>
                    </div>
                </div>
                </li>
                @endforeach
            </ul>

            {{-- {{ $allCategorias->links() }} --}}
        @else
            <div class="col-12">
                <p>Não existem categorias cadastradas.</p>
            </div>
        @endif
    </div>


@endsection
