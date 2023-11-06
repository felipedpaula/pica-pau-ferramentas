@extends('cms.layouts.cms-default')
@section('content')
<a href="/admin/categorias/criar" class="btn btn-success mb-3">Criar Nova Categoria</a>
<div class="row">
    <div class="col-md-3">
        <div class="card category-card">
            <div class="category-image">
                <img src="https://jcamadeireira.com.br/2341-large_default/parafusos-mdf-60x70-c-100-unidades-jomarca.jpg" class="card-img-top" alt="Categoria 1">
            </div>
            <div class="card-body">
                <h5 class="card-title">Categoria 1</h5>
                <a href="/admin/categorias/parafusos" class="btn btn-info mb-2">Produtos da categoria</a>
                <a href="/admin/categorias/editar/parafusos" class="btn btn-primary mb-2">Editar categoria</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card category-card">
            <div class="category-image">
                <img src="https://jcamadeireira.com.br/2341-large_default/parafusos-mdf-60x70-c-100-unidades-jomarca.jpg" class="card-img-top" alt="Categoria 1">
            </div>
            <div class="card-body">
                <h5 class="card-title">Categoria 1</h5>
                <a href="/admin/categorias/parafusos" class="btn btn-info  mb-2">Produtos da categoria</a>
                <a href="/admin/categorias/editar/parafusos" class="btn btn-primary mb-2">Editar categoria</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card category-card">
            <div class="category-image">
                <img src="https://jcamadeireira.com.br/2341-large_default/parafusos-mdf-60x70-c-100-unidades-jomarca.jpg" class="card-img-top" alt="Categoria 1">
            </div>
            <div class="card-body">
                <h5 class="card-title">Categoria 1</h5>
                <a href="/admin/categorias/parafusos" class="btn btn-info  mb-2">Produtos da categoria</a>
                <a href="/admin/categorias/editar/parafusos" class="btn btn-primary mb-2">Editar categoria</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card category-card">
            <div class="category-image">
                <img src="https://jcamadeireira.com.br/2341-large_default/parafusos-mdf-60x70-c-100-unidades-jomarca.jpg" class="card-img-top" alt="Categoria 1">
            </div>
            <div class="card-body">
                <h5 class="card-title">Categoria 1</h5>
                <a href="/admin/categorias/parafusos" class="btn btn-info  mb-2">Produtos da categoria</a>
                <a href="/admin/categorias/editar/parafusos" class="btn btn-primary mb-2">Editar categoria</a>
            </div>
        </div>
    </div>
</div>
@endsection
