@extends('site.layouts.site-default')

@section('content')
    <div class="default-header">
        <div class="container">
            <h2>Categoria | {{$categoria->name}}</h2>
            <p>@if(isset($categoria->description) && $categoria->description != ''){{$categoria->description}} @else {{$categoria->name}} @endif</p>
        </div>
    </div>

    <section class="main-section py-4">
        <div class="container">
            <span class="ps-2">{{ $subcategorias->count()}} subcategorias</span>
            <div class="lista-categorias mt-3">
                @foreach ($subcategorias as $item)
                <div class="col-12 col-sm-6 col-lg-4 p-2">
                    <div class="card-slide">
                        <img class="img-destaque-card" src="{{$item->img_destaque}}" alt="{{$item->name}}" loading="lazy">
                        <div class="gradient-card-bg"></div>
                        <h5>{{$item->name}}</h5>
                        <a class="btn-card" href="/categoria/{{$item->slug}}">
                            <span>Ver produtos</span>
                            <span class="material-symbols-outlined">
                                link
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="main-section py-5">
        <div class="container">
            <h2 class="title mb-0">Produtos da categoria {{$categoria->name}}</h2>
            <div class="listagem-produtos-categoria">
                @foreach ($produtosDaCategoria as $item)
                <div class="col-6 p-2">
                    <div class="card-produto">
                        <img class="img-card-produto" src="{{$item->image_url}}" alt="{{$item->name}}">
                        <div class="info-card-produto">

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
