@extends('site.layouts.site-default')

@section('content')
    <section class="main-section section-1">
        {{-- <p>$destaques_slide</p> --}}
        <div class="swiper swiper-1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="container">
                        <div class="main-slide">
                            Slide teste
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="main-slide">
                            Slide teste
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="main-slide">
                            Slide teste
                        </div>
                    </div>
                </div>
              ...
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
    {{-- <p>$destaques_pequenos</p> --}}
    {{-- <p>$ofertas_especiais</p> --}}
    {{-- <p>$categorias</p> --}}
@endsection
