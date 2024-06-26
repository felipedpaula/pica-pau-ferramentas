@extends('site.layouts.site-default')

@section('content')

    @if (isset($destaques_slide) && count($destaques_slide) > 0)
    <section class="main-section section-1">
        {{-- <p>$destaques_slide</p> --}}
        <div class="swiper swiper-1">
            {{-- <div id="area-video-bg">
                <div class="gradient-slider-bg"></div>
                <video width="320" height="240" loop autoplay muted>
                  <source src="{{asset('assets/site/videos/video-comprimido.mp4')}}" type="video/mp4">
                </video>
            </div> --}}
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($destaques_slide as $item)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="main-slide">
                            <div class="main-slide-info">
                                <h2>{{$item->titulo}}</h2>
                                <p>{{$item->subtitulo}}</p>
                                <a class="btn-slider" href="{{$item->url_link}}">{{$item->texto_link}}</a>
                            </div>
                            <div class="img-slide">
                                <img src="{{$item->img_src}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    @endif

    @if (isset($categorias) && count($categorias) > 0)
    <section class="main-section section-2 py-4 mt-3">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        construction
                    </span>
                    Encontre por segmento
                </h3>
                <a class="link-section" href="/categorias">
                    Todas as categorias
                    <span class="material-symbols-outlined">
                        link
                    </span>
                </a>
            </div>
            <div class="slider-categorias-home mt-3">
                <div class="swiper swiper-2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($categorias as $item)
                        <div class="swiper-slide">
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
            </div>
        </div>
    </section>
    @endif

    @if (isset($ofertas_especiais) && count($ofertas_especiais) > 0)
    <section class="main-section section-3 py-4 mt-5">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        shoppingmode
                    </span>
                    Ofertas especiais
                </h3>
            </div>
            <div class="lista-ofertas-home mt-3">
                @foreach ($ofertas_especiais as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 p-md-3 p-sm-0 col-oferta">
                    <div class="card-oferta">
                        <div class="img-oferta">
                            <img src="{{$item->img_src}}" alt="{{$item->titulo}}">
                        </div>
                        <div class="info-oferta">
                            <h5>{{$item->titulo}}</h5>
                            <p>{{$item->subtitulo}}</p>
                            <a href="{{$item->url_link}}" class="link-oferta">
                                Aproveitar oferta
                                <span class="material-symbols-outlined">
                                    contact_support
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if (isset($destaques_card) && count($destaques_card) > 0)
    <section class="main-section section-5 py-4 mt-5">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        local_fire_department
                    </span>
                    Destaques
                </h3>
            </div>
            <div class="destaques-row mt-3">
                @foreach ($destaques_card as $item)
                <div class="col-12 col-md-6 p-2 d-flex justify-content-center">
                    <a href="{{$item->url_link}}" class="destaque-card">
                        <img src="{{$item->img_src}}" alt="{{$item->titulo}}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="main-section section-4 pt-5 pb-3">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    Sobre nós
                </h3>
                <a class="link-section" href="/sobre">
                    Saiba mais
                    <span class="material-symbols-outlined">
                        link
                    </span>
                </a>
            </div>
            <div class="sobre-home py-3">
                <div class="col-lg-5 col-12 mascote-sobre-home">
                    <img height="250px" src="{{asset('assets/site/images/logos-mascote/logo_h_amarelo.png')}}" alt="">
                </div>
                <div class="col-lg-7 col-12 info-sobre-home">
                    <p>Na Pica Pau Ferramentas, somos especialistas em oferecer soluções de qualidade para todos os seus projetos. Com anos de experiência, selecionamos as melhores ferramentas, materiais de pintura, produtos de jardinagem, elétricos e de segurança.</p>
                    <p>Nosso compromisso é com a sua satisfação, proporcionando atendimento especializado e preços justos. Descubra a diferença na Pica Pau Ferramentas, onde cada cliente é parte da nossa história de sucesso.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section section-5 py-5">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        store
                    </span>
                    As melhores marcas
                </h3>
            </div>
            <div class="lista-marcas-home mt-5 py-5">
                <div class="swiper swiper-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/belenus.webp')}}" alt="Belenus">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/bonevau.webp')}}" alt="Bonevau">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/bosch.webp')}}" alt="Bosch">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/carbografite.webp')}}" alt="Carbografite">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/ciser.webp')}}" alt="Ciser">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/denver.webp')}}" alt="Denver">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/dewalt.webp')}}" alt="Dewalt">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/gedore.webp')}}" alt="Gedore">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/gerdau.webp')}}" alt="Gerdau">
                        </div>
                        <div class="swiper-slide">
                            <img width="140px" src="{{asset('assets/site/images/marcas/tyrolit.webp')}}" alt="Tyrolit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section section-6 py-5">
        <div class="container">
            <div class="topo-section">
                <h3>
                    <span class="material-symbols-outlined">
                        map
                    </span>
                    Visite a loja física
                </h3>
            </div>
            <div class="contact-map mt-3">
                <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15312.280028793391!2d-49.493885!3d-16.3703958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e785b8c0cd89b%3A0x82a58af7e8af35e5!2sPica-Pau%20Parafusos%20e%20Ferramentas!5e0!3m2!1spt-BR!2sbr!4v1700676388141!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

@endsection
