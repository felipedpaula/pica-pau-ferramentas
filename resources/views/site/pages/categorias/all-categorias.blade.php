@extends('site.layouts.site-default')

@section('content')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" style="background-color:#f4002d;height:200px">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 style="color:#FFF" class="breadcrumb-heading">Categorias de Produtos</h2>
                        <ul>
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li>Categorias</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-topbar">
                        <ul>
                            <li class="page-count">
                                <span>{{$allCategorias->count()}} Produtos encontrados</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content text-charcoal pt-8">
                        <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                            <div class="product-list-view row">
                                @foreach ($allCategorias as $categoria)
                                    <div class="col-md-6 mb-5">
                                        <div class="product-list-item" style="gap: 10px">
                                            <div class="product-list-img img-zoom-effect">
                                                <a href="/categoria/{{$categoria->slug}}">
                                                    <img class="img-full" src="{{$categoria->img_destaque}}" alt="Product Images">
                                                </a>
                                            </div>
                                            <div class="product-list-content">
                                                <a class="product-name pb-2" href="/categoria/{{$categoria->slug}}">{{$categoria->name}}</a>
                                                <p class="short-desc mb-0">{{$categoria->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
