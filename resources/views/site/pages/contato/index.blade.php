@extends('site.layouts.site-default')

@section('content')

    <div class="default-header">
        <div class="container">
            <h2>Contato</h2>
            <p>Estamos aqui para ajudar! Entre em contato conosco para dúvidas, suporte ou feedback. Sua satisfação é nossa prioridade.</p>
        </div>
    </div>

    <section class="main-section">
        <div class="container">
            <div class="area-contato">
                <div class="col-12 col-xs-12 col-sm-12 col-lg-6 py-5 pe-lg-5 pe-xs-0 pe-sm-o">
                    <form class="contact-form" action="{{ route('sendfb') }}" method="POST">
                        <p><strong>Fomulário de contato</strong></p>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="group-input">
                            <div class="form-field me-xl-6">
                                <input type="text" name="name" id="name" placeholder="Nome*" class="input-field">
                            </div>
                            <div class="form-field mt-6 mt-xl-0">
                                <input type="text" name="email" id="email" placeholder="Email*" class="input-field">
                            </div>
                        </div>

                        <div class="group-input mt-6">
                            <div class="form-field mt-6 mt-xl-0">
                                <input type="text" name="telefone" id="telefone" placeholder="Telefone*" class="input-field">
                            </div>
                        </div>

                        <div class="form-field mt-6">
                            <textarea name="mensagem" id="mensagem" placeholder="Menssagem" class="textarea-field"></textarea>
                        </div>
                        <div class="button-wrap mt-8">
                            <button type="submit" value="Enviar" class="btn-contato" name="submit">Enviar</button>
                            <p class="mt-3 mb-0"></p>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6 py-5">
                    <img width="95%" src="{{asset('assets/site/images/default/contato.png')}}" alt="Contato">
                </div>
            </div>
        </div>
    </section>

    <section class="main-section py-5">
        <div class="container">
            <div class="lista-contato-card">
                <div class="col-12 col-sm-12 col-xs-12 col-lg-4">
                    <div class="contato-card">
                        <img src="{{asset('assets/site/images/default/home.png')}}" alt="Loja Física">
                        <div class="contato-card-info mt-3">
                            <h5>Endereço</h5>
                            <p>
                                Av. Bernardo Sayão 2462 <br>
                                Inhumas - GO, 75402-050
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-xs-12 col-lg-4">
                    <div class="contato-card">
                        <img src="{{asset('assets/site/images/default/phone.png')}}" alt="Telefone">
                        <div class="contato-card-info mt-3">
                            <h5>Telefone</h5>
                            <p>
                                <strong>Vendas: </strong>(62) 99146 - 6107 <br>
                                <strong>Financeiro: </strong>(62) 3514 - 8800
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-xs-12 col-lg-4">
                    <div class="contato-card">
                        <img src="{{asset('assets/site/images/default/message.png')}}" alt="Email">
                        <div class="contato-card-info mt-3">
                            <h5>Email</h5>
                            <p>
                                ferramentaspicapau@gmail.com
                            </p>
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
            <div class="contact-map mt-4">
                <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15312.280028793391!2d-49.493885!3d-16.3703958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e785b8c0cd89b%3A0x82a58af7e8af35e5!2sPica-Pau%20Parafusos%20e%20Ferramentas!5e0!3m2!1spt-BR!2sbr!4v1700676388141!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
