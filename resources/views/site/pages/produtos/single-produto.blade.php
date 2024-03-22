@extends('site.layouts.site-default')

@section('content')
    <section class="main-content">
        <div class="default-header">
            <div class="container">
                <h2>{{$produto->name}}</h2>
                <p><strong>Categoria: </strong>{{$categoriaProduto->name}}</p>
                <p>@if(isset($produto->description) && $produto->description != ''){{$produto->description}} @else {{$produto->name}} @endif</p>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="area-single-produto mt-4 py-4">
                <div class="img-detaque-single-produto col-sm-12 col-md-5 pe-sm-0 pe-lg-5">
                    <img class="img-principal" src="{{$produto->image_url}}" alt="{{$produto->name}}">
                    @if (isset($imgsProduto) && count($imgsProduto) > 0)
                    <div class="imagens-carrosel-produto mt-3 px-2">
                        <div class="img-carrosel-produto">
                            <img src="{{$produto->image_url}}" alt="{{$produto->name}}">
                        </div>
                        @foreach ($imgsProduto as $item)
                        <div class="img-carrosel-produto">
                            <img src="{{$item->image_url}}" alt="{{$item->description}}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="info-single-produto col-sm-12 col-md-7 ps-3">
                    <div class="price-single-produto mb-3">R$ {{$produto->price}}</div>
                    <div class="body-single-produto mb-5">
                        A Marteleira é uma marca renomada que se destaca pela fabricação de martelos de alta qualidade e durabilidade. Com um foco em inovação e ergonomia, os martelos da Marteleira são projetados para oferecer conforto e eficiência, atendendo tanto profissionais da construção quanto entusiastas do faça-você-mesmo. Reconhecida por sua robustez e precisão, a Marteleira se tornou a escolha preferida para quem busca ferramentas confiáveis e de alto desempenho.
                    </div>
                    <div class="shop-single-produto">
                        <a href="/contato" class="contato-shop">
                            <span class="me-2">Entrar em contato</span>
                            <span class="material-symbols-outlined">
                                contact_support
                            </span>
                        </a>
                        <a href="/" class="wpp-shop">
                            <span class="me-2">Chamar no whatsapp</span>
                            <svg width="25" height="25" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M80.7703 13.8058C71.8826 4.90771 60.0627 0.0052185 47.4704 0C21.5229 0 0.405304 21.117 0.394867 47.0715C0.391388 55.3683 2.55881 63.4675 6.67853 70.6064L0 95L24.9555 88.4537C31.8317 92.2046 39.5731 94.1813 47.4513 94.1836H47.471C73.4157 94.1836 94.5355 73.0649 94.5454 47.1092C94.5506 34.5303 89.6586 22.7034 80.7703 13.8058ZM47.4704 86.2335H47.4542C40.4336 86.2306 33.548 84.3438 27.5398 80.7796L26.1117 79.9313L11.3027 83.8162L15.2554 69.3777L14.3248 67.8974C10.408 61.6677 8.33975 54.4673 8.34323 47.0744C8.35135 25.5017 25.9041 7.95068 47.4861 7.95068C57.937 7.95416 67.7611 12.0292 75.1482 19.425C82.5353 26.8208 86.6011 36.6513 86.5976 47.1063C86.5883 68.6808 69.0368 86.2335 47.4704 86.2335ZM68.9324 56.9293C67.7565 56.3401 61.9732 53.4955 60.8947 53.1024C59.8174 52.7098 59.0323 52.5144 58.249 53.6915C57.4644 54.8685 55.2106 57.5184 54.5241 58.3029C53.8376 59.088 53.1522 59.1866 51.9757 58.5974C50.7993 58.0089 47.0095 56.7663 42.5163 52.7591C39.0199 49.6402 36.6594 45.7883 35.9729 44.6113C35.2875 43.433 35.9671 42.8578 36.4889 42.2108C37.7623 40.6295 39.0373 38.9718 39.4293 38.1873C39.8218 37.4022 39.6253 36.7151 39.3307 36.1266C39.0373 35.538 36.6849 29.7484 35.705 27.3925C34.7494 25.0999 33.7805 25.4095 33.0581 25.3735C32.3727 25.3393 31.5882 25.3324 30.8037 25.3324C30.0197 25.3324 28.7453 25.6263 27.6668 26.8046C26.5889 27.9822 23.5505 30.8275 23.5505 36.6171C23.5505 42.4067 27.7653 47.9998 28.3533 48.7849C28.9413 49.57 36.6478 61.4508 48.4469 66.5452C51.2533 67.7582 53.4439 68.4813 55.1526 69.0234C57.9706 69.9187 60.5341 69.7923 62.5612 69.4896C64.8214 69.1516 69.5198 66.6438 70.5008 63.8965C71.4808 61.1487 71.4808 58.794 71.1862 58.3029C70.8928 57.8123 70.1083 57.5184 68.9324 56.9293Z" fill="#FFF"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="area-produtos-relacionados mt-5">
                <h4>Produtos Relacionados</h4>
                <div class="listagem-produtos-relacionados pb-4">
                    @foreach ($produtosRelacionados as $item)
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
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona todas as imagens dentro do carrossel
            var imagensCarrossel = document.querySelectorAll('.img-carrosel-produto img');

            imagensCarrossel.forEach(function(img) {
                img.addEventListener('click', function() {
                    // Ao clicar em uma imagem do carrossel, atualiza a imagem principal
                    var imagemPrincipal = document.querySelector('.img-principal');
                    if(imagemPrincipal) {
                        imagemPrincipal.src = this.src; // Atualiza o src da imagem principal
                        imagemPrincipal.alt = this.alt; // Opcional: também atualiza o alt, se necessário
                    }
                });
            });
        });
    </script>
@endsection
