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

    @if(isset($produtosDaCategoria) && count($produtosDaCategoria) > 0)
    <section class="main-section mt-3">
        <div class="container">
            <h2 class="title-produtos-categoria"><strong>Produtos da categoria {{$categoria->name}}</strong></h2>
            <div class="listagem-produtos-categoria py-4">
                @foreach ($produtosDaCategoria as $item)
                <div class="col-lg-6 p-2">
                    <a href="/produto/{{$item->slug}}" class="card-produto">
                        <img class="img-card-produto" src="{{$item->image_url}}" alt="{{$item->name}}">
                        <div class="info-card-produto ps-3">
                            <h3>{{$item->name}}</h3>
                            <p>{{$item->description}}</p>
                            <div class="bottom-produto">
                                <div class="card-price">
                                    R$ {{$item->price}}
                                </div>
                                <div class="tag-buy">
                                    <span class="material-symbols-outlined">
                                        sell
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif


@endsection
