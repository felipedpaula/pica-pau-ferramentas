@extends('site.layouts.site-default')

@section('content')
    <!-- Begin Slider Area -->
    @if (isset($destaques_slide) && count($destaques_slide) > 0)
    <div class="slider-area">
        <!-- Main Slider -->
        <div class="swiper-container main-slider swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                @foreach ($destaques_slide as $destaque)
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{$destaque->img_src}}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h2 class="title mb-3">{{$destaque->titulo}}</h2>
                                <p class="short-desc different-width mb-10">{{$destaque->subtitulo}}</p>
                                @if (isset($destaque->texto_link) && $destaque->texto_link != '')
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="{{$destaque->url_link}}">{{$destaque->texto_link}}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Custom Arrows -->
            <div class="custom-arrow-wrap d-none d-md-block">
                <div class="custom-button-prev"></div>
                <div class="custom-button-next"></div>
            </div>
        </div>
    </div>
    @endif
    <!-- Slider Area End Here -->

    <div class="background-img">
        <div class="inner-bg">
            <img src={{asset('assets/site/images/background/bg-3.jpg')}} alt="Inner Background">
        </div>
        <div class="banner-area section-space-top-100">
            <div class="container">
                <div class="row">
                    @foreach ($destaques_pequenos as $destaque)
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item img-hover-effect">
                            <div class="banner-img img-zoom-effect">
                                <img width="400" height="250" class="img-full" src="{{$destaque->img_src}}" alt="{{$destaque->titulo}}">
                                {{-- <img class="img-full" src="/tromic/assets/images/banner/1-1-400x250.jpg" alt="Banner Image"> --}}
                                <div class="inner-content text-white">
                                    {{-- <h3 class="offer">$96</h3> --}}
                                    <h2 class="title mb-5">{{$destaque->titulo}}</h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="{{$destaque->url_link}}">Produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Product Area -->
    <div class="background-img" data-bg-image="{{asset('assets/site/images/background/gpt2.png')}}">
        <div class="product-area section-space-y-axis-100">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">OFERTAS ESPECIAIS</h2>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-item-wrap row">
                            @foreach ($ofertas_especiais as $destaque)
                            <div class="col-lg-4 col-md-6 {{ $loop->index >= 3 ? 'pt-7' : ''}}">
                                <div class="product-item" style="max-height:350px">
                                    <div class="product-img img-zoom-effect">
                                        <a href="shop.html">
                                            <img width="290" height="350" class="img-full" src="{{$destaque->img_src}}" alt="Product Images">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name pb-1" href="{{$destaque->url_link ? $destaque->url_link : '#'}}">{{$destaque->titulo}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 pt-7 pt-lg-0">
                        <div class="product-banner img-hover-effect">
                            <div class="product-banner-img fixed-height img-zoom-effect">
                                <a href="shop.html">
                                    <img class="img-full" src="/tromic/assets/images/product/medium-size/special-deals/banner/1-1-290x748.jpg" alt="Product Banner">
                                </a>
                                <div class="product-banner-content text-white">
                                    <h3 class="category">APROVEITE NOSSA PROMOÇÃO</h3>
                                    <h2 class="offer">30% Off</h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary" href="shop.html">Ver produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-55">
                        <div class="button-wrap">
                            <a class="btn btn-link text-danger with-underline p-0" href="shop.html">Ver mais produtos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

    <!-- Begin Product Area -->
    <div class="background-img" data-bg-image="/tromic/assets/images/background-img/1-2-1920x716.jpg">
        <div class="product-area section-space-y-axis-100 product-arrow">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">Produtos populares</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper text-heading">
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full" src="/tromic/assets/images/product/medium-size/product-slider/1-1-290x350.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Produto de Exemplo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full" src="/tromic/assets/images/product/medium-size/product-slider/1-2-290x350.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Produto de Exemplo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full" src="/tromic/assets/images/product/medium-size/product-slider/1-3-290x350.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Produto de Exemplo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="shop.html">
                                                <img class="img-full" src="/tromic/assets/images/product/medium-size/product-slider/1-4-290x350.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1" href="shop.html">Produto de Exemplo</a>
                                        </div>
                                    </div>
                                </div>
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
    <!-- Product Area End Here -->

    <!-- Begin Banner Area -->
    <div class="banner-area banner-style-2 section-border-y-axis section-space-y-axis-100" data-bg-image="{{asset('assets/site/images/background/bg-4.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <span class="sub-title mb-2">30% Limited Time Offer </span>
                        <h2 class="title mb-5">car Parts for short people</h2>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

    <!-- Begin Brand Area -->
    <div class="brand-area section-space-y-axis-100 white-smoke-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-1.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-2.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-3.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-4.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-5.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="/tromic/assets/images/brand/1-6.png" alt="Brand Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
@endsection
