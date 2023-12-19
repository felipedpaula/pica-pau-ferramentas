@extends('cms.layouts.cms-default')

@section('content')

    <!-- ALERTAS -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- FIM ALERTAS -->

    <div class="row">
        <div class="col-md-8 px-0 d-flex">
            {{-- <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar usuário" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form> --}}
        </div>
        <div class="col-md-4 text-right">
            <a href="{{route('admin.destaque.create')}}" class="btn btn-primary" type="button">+ Novo destaque</a>
        </div>
    </div>

    <div class="row mt-4">
        @if (isset($destaques) && count($destaques) > 0)
        <ul class="list-group col-12">
            <!-- Cabeçalho da Lista -->
            <li class="list-group-item">
                <div class="row font-weight-bold flex-nowrap overflow-auto">
                    <div class="col-lg-7">Título</div>
                    <div class="col-lg-3">Categoria</div>
                    <div class="col-lg-2">Ações</div>
                </div>
            </li>

            @foreach ($destaques as $destaque)
            <!-- Item da Lista -->
            <li class="list-group-item">
            <div class="row flex-nowrap overflow-auto">
                <div class="col-lg-7">{{$destaque->titulo}}</div>
                <div class="col-lg-3">{{$destaque->categoria_id}}</div>
                <div class="col-lg-2">
                    <a href="{{route('admin.destaque.edit', ['id' => $destaque->id])}}" class="btn btn-primary btn-sm">Editar</a>
                </div>
            </div>
            </li>
            @endforeach
        </ul>
        {{ $destaques->links() }}
        @else
        <p>Não existem destaques cadastrados.</p>
        @endif
    </div>
@endsection
