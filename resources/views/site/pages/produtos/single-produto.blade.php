@extends('site.layouts.site-default')

@section('content')
{{-- {{dd($produto)}} --}}
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" style="background-size: contain" data-bg-image="{{asset('assets/site/images/background/bg-4.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h1 class="breadcrumb-heading">{{$produto->name}}</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home /</a>
                            </li>
                            <li>{{$produto->name}}</li>
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
                        <h2 class="title mb-3">{{$produto->name}}</h2>
                        <div class="price-box pb-3">
                            <span class="new-price text-danger">@if(isset($produto->price) && $produto->price != '')R${{$produto->price}} @else Sem preço @endif</span>
                        </div>
                        <p class="short-desc mb-3">@if(isset($produto->description) && $produto->description != ''){{$produto->description}} @else {{$produto->name}} @endif</p>
                        <div class="product-category pb-3">
                            <span class="title">Categoria :</span>
                            <ul>
                                <li>
                                    <a href="/categoria/{{$categoriaProduto->slug}}">{{$categoriaProduto->name}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-img" data-bg-image="assets/images/background-img/1-2-1920x716.jpg">
        <div class="product-area product-arrow section-space-y-axis-100">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">Produtos similares</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper text-heading">
                                {{-- {{dd($produtosRelacionados)}} --}}
                                @foreach ($produtosRelacionados as $prodRel)
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="/produto/{{$prodRel->slug}}.html" style="width: 200px; height: 200px;">
                                                    <img src={{asset('assets/site/images/background/bg-3.jpg')}} alt="Inner Background">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1" href="/produto/{{$prodRel->slug}}.html"><h3>{{$prodRel->name}}</h3></a>
                                                <div class="price-box pb-3">
                                                    <h3 class="new-price text-danger">R$ {{$prodRel->price}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="product-button-wrap pt-10">
                            <div class="product-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="product-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
