@extends('cms.layouts.cms-default')
@section('content')
<a href="{{route('admin.produto.create')}}" class="btn btn-success mb-3">Criar Novo Produto</a>
<div class="row">
    {{-- @if (isset($usuarios) && !empty($usuarios)) --}}
    <ul class="list-group col-12">
        <!-- Cabeçalho da Lista -->
        <li class="list-group-item">
            <div class="row font-weight-bold flex-nowrap overflow-auto">
            <div class="col-lg-3">Nome do produto</div>
            <div class="col-lg-3">Categoria</div>
            <div class="col-lg-6">Descrição</div>
            </div>
        </li>

        {{-- @foreach ($usuarios as $usuario) --}}
        <!-- Item da Lista -->
        <li class="list-group-item">
        <div class="row flex-nowrap overflow-auto">
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                @can('settings-users')
                <a href="" class="btn btn-primary btn-sm">Editar</a>
                @endcan
            </div>
        </div>
        </li>
        {{-- @endforeach --}}
    </ul>
    {{-- {{ $usuarios->links() }} --}}
    {{-- @else --}}
    <p>Não existem produtos cadastrados.</p>
    {{-- @endif --}}
</div>
@endsection
