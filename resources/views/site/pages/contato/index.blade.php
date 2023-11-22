@extends('site.layouts.site-default')

@section('content')
    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/site/images/contato/banner-contato.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 style="color:#FFF" class="breadcrumb-heading">Contato</h2>
                            <ul>
                                <li>
                                    <a style="color:#FFF" href="index.html">Home/</a>
                                </li>
                                <li style="color:#FFF">Contato</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Shipping Area -->
        <div class="shipping-area shipping-style-2 section-space-y-axis-100">
            <div class="container">
                <div class="row shipping-wrap py-5 py-xl-0">
                    <div class="col-lg-4 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="/tromic/assets/images/shipping/icon/phone.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Telefone</h2>
                                <p class="short-desc mb-0">(62) 99146-6107</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="/tromic/assets/images/shipping/icon/message.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Email</h2>
                                <p class="short-desc mb-0">demo@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="/tromic/assets/images/shipping/icon/home.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Endereço</h2>
                                <p class="short-desc mb-0">Av. Bernardo Sayão, 2462<br>Inhumas - GO, 75402-050</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <div class="contact-form-area section-space-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form-wrap">
                            <div class="contact-img">
                                <img src="/tromic/assets/images/contact/1-1-520x278.png" alt="Contact Images">
                            </div>
                            <form id="contact-form" class="contact-form" action="https://whizthemes.com/mail-php/mamunur/tromic/tromic.php">
                                <h4 class="contact-form-title mb-7">Deixe um feedback sobre sua experiência conosco.</h4>
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
                                    <button type="submit" value="Enviar" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">Enviar</button>
                                    <p class="form-message mt-3 mb-0"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-with-map">
            <div class="contact-map">
                <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15312.280028793391!2d-49.493885!3d-16.3703958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e785b8c0cd89b%3A0x82a58af7e8af35e5!2sPica-Pau%20Parafusos%20e%20Ferramentas!5e0!3m2!1spt-BR!2sbr!4v1700676388141!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->
@endsection
