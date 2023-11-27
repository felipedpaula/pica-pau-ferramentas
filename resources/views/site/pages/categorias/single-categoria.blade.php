@extends('site.layouts.site-default')

@section('content')

        {{-- FAZER TRATAMENTO DE SUBCATEGORIA --}}
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" style="background-size: contain" data-bg-image="{{asset('assets/site/images/background/bg-4.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h1 class="breadcrumb-heading">{{$categoria->name}}</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home /</a>
                                </li>
                                <li>{{$categoria->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-product-img">
                            <div class="swiper-container single-product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-full" src="{{asset('assets/site/images/background/bg-3.jpg')}}" alt="Product Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-9 pt-lg-0">
                        <div class="single-product-content">
                            <h2 class="title mb-3">{{$categoria->name}}</h2>
                            <p class="short-desc mb-3">@if(isset($categoria->description) && $categoria->description != ''){{$categoria->description}} @else {{$categoria->name}} @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-img" data-bg-image="assets/images/background-img/1-2-1920x716.jpg">
            <div class="product-area product-arrow section-space-y-axis-100">
                <div class="container">
                    <div class="section-title pb-55">
                        <h2 class="title mb-0">Produtos da categoria {{$categoria->name}}</h2>
                    </div>
                    <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                        <div class="product-list-view row">
                            @foreach ($produtosDaCategoria as $produto)
                                <div class="col-12 @if($loop->iteration > 1) pt-8 @endif">
                                    <div class="product-list-item" style="gap: 10px">
                                        <div class="product-list-img img-zoom-effect">
                                            <a href="/produto/{{$produto->slug}}.html">
                                                <img class="img-full" src="assets/images/product/medium-size/shop/1-1-290x350.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-list-content">
                                            <a class="product-name pb-2" href="/produto/{{$produto->slug}}.html">{{$produto->name}}</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">R$ {{$produto->price}}</span>
                                            </div>
                                            <p class="short-desc mb-0">{{$produto->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
