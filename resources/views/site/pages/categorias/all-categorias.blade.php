@extends('site.layouts.site-default')

@section('content')
    <div class="default-header">
        <div class="container">
            <h2>Categorias</h2>
            <p>Explore nossa ampla seleção de ferramentas para todos os seus projetos. Encontre exatamente o que precisa em nossas categorias cuidadosamente organizadas.</p>
        </div>
    </div>

    @if (isset($allCategorias) && count($allCategorias) > 0)
    <section class="main-section my-5">
        <div class="container">
            <div class="lista-categorias">
                @foreach ($allCategorias as $item)
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
    @endif

@endsection
