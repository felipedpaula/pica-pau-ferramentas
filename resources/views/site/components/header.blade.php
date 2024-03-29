<!-- Begin Main Header Area -->
<header class="main-header-area">
    <div class="topo-info">
        <div class="container">
            <strong>Inhumas</strong> &nbsp; | &nbsp; Compre pelo telefone <strong>(62) 99146-6107</strong> ou no nosso endereço: <strong>Av. Bernardo Sayão, 2462, Inhumas - GO, 75402-050</strong>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="area-header">
                <div class="header-top">
                    <div class="logo-menu">
                        <a href="/" title="Pica Pau Ferramentas">
                            <img src="{{asset('assets/site/images/logos-text/logo_vermelho.svg')}}" alt="Pica Pau Ferramentas">
                        </a>
                    </div>
                    <div class="search-menu">
                        <form id="formPesquisa">
                            <div class="input-group">
                                <input id="inputPesquisa" name="termo" type="text" class="form-control" placeholder="Econtre no site..." aria-label="Econtre no site..." aria-describedby="button-addon2">
                                <button class="btn btn-danger" type="submit" id="btn-search-menu">Pesquisar</button>
                            </div>
                        </form>
                    </div>
                    <div class="btn-wpp-menu">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=5562991466107&text=Ol%C3%A1,%20vim%20pelo%20site.%20Gostaria%20de..." id="btn-wpp-menu">
                            <span>Whatsapp</span>
                            <svg width="25" height="25" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M80.7703 13.8058C71.8826 4.90771 60.0627 0.0052185 47.4704 0C21.5229 0 0.405304 21.117 0.394867 47.0715C0.391388 55.3683 2.55881 63.4675 6.67853 70.6064L0 95L24.9555 88.4537C31.8317 92.2046 39.5731 94.1813 47.4513 94.1836H47.471C73.4157 94.1836 94.5355 73.0649 94.5454 47.1092C94.5506 34.5303 89.6586 22.7034 80.7703 13.8058ZM47.4704 86.2335H47.4542C40.4336 86.2306 33.548 84.3438 27.5398 80.7796L26.1117 79.9313L11.3027 83.8162L15.2554 69.3777L14.3248 67.8974C10.408 61.6677 8.33975 54.4673 8.34323 47.0744C8.35135 25.5017 25.9041 7.95068 47.4861 7.95068C57.937 7.95416 67.7611 12.0292 75.1482 19.425C82.5353 26.8208 86.6011 36.6513 86.5976 47.1063C86.5883 68.6808 69.0368 86.2335 47.4704 86.2335ZM68.9324 56.9293C67.7565 56.3401 61.9732 53.4955 60.8947 53.1024C59.8174 52.7098 59.0323 52.5144 58.249 53.6915C57.4644 54.8685 55.2106 57.5184 54.5241 58.3029C53.8376 59.088 53.1522 59.1866 51.9757 58.5974C50.7993 58.0089 47.0095 56.7663 42.5163 52.7591C39.0199 49.6402 36.6594 45.7883 35.9729 44.6113C35.2875 43.433 35.9671 42.8578 36.4889 42.2108C37.7623 40.6295 39.0373 38.9718 39.4293 38.1873C39.8218 37.4022 39.6253 36.7151 39.3307 36.1266C39.0373 35.538 36.6849 29.7484 35.705 27.3925C34.7494 25.0999 33.7805 25.4095 33.0581 25.3735C32.3727 25.3393 31.5882 25.3324 30.8037 25.3324C30.0197 25.3324 28.7453 25.6263 27.6668 26.8046C26.5889 27.9822 23.5505 30.8275 23.5505 36.6171C23.5505 42.4067 27.7653 47.9998 28.3533 48.7849C28.9413 49.57 36.6478 61.4508 48.4469 66.5452C51.2533 67.7582 53.4439 68.4813 55.1526 69.0234C57.9706 69.9187 60.5341 69.7923 62.5612 69.4896C64.8214 69.1516 69.5198 66.6438 70.5008 63.8965C71.4808 61.1487 71.4808 58.794 71.1862 58.3029C70.8928 57.8123 70.1083 57.5184 68.9324 56.9293Z" fill="#FFF"/>
                            </svg>
                        </a>
                    </div>

                    <div class="sandwith" onclick="handleSandwitch(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                      </div>
                </div>

                <div class="header-bottom">
                    <div class="menu-desktop">
                        <ul class="nav-desktop">
                            <li><a class="link-menu" href="/">Home</a></li>
                            <li class="dropdown-submenu">
                                <a class="link-menu" href="/categorias">
                                    Categorias
                                    <span class="material-symbols-outlined">
                                        expand_more
                                    </span>
                                </a>
                                <ul class="submenu">
                                    @foreach ($categoriasMenu as $item)
                                    @if ($loop->index < 15)
                                    <li><a class="link-submenu" href="#">{{$item->name}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="link-menu" href="/sobre">Sobre nós</a></li>
                            <li><a class="link-menu" href="/contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-menu pb-2">
        <div class="topo-info-mobile">
            <div class="container">
                <strong>Inhumas</strong> &nbsp; | &nbsp; Compre pelo telefone <strong>(62) 99146-6107</strong> ou no nosso endereço: <strong>Av. Bernardo Sayão, 2462, Inhumas - GO, 75402-050</strong>
            </div>
        </div>

        <div class="container">
            <ul class="side-menu-nav">
                <li>
                    <a class="ms-1" href="/">Home</a>
                </li>
                <li class="dropdown-side-submenu">
                    <a class="ms-1" onclick="openSideSubmenu()" href="#">
                        Categorias
                        <span class="material-symbols-outlined">
                            expand_more
                        </span>
                    </a>
                    <ul class="side-submenu">
                        <li><a class="ps-2" href="/categorias">Todas as categorias</a></li>
                        @foreach ($categoriasMenu as $item)
                        <li><a class="ps-2" href="/categoria/{{$item->slug}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a class="ms-1" href="/sobre">
                        Sobre nós
                    </a>
                </li>
                <li>
                    <a class="ms-1" href="/contato">
                        Contato
                    </a>
                </li>
            </ul>
            <button id="btn-wpp-menu">
                <span>Whatsapp</span>
                <svg width="25" height="25" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M80.7703 13.8058C71.8826 4.90771 60.0627 0.0052185 47.4704 0C21.5229 0 0.405304 21.117 0.394867 47.0715C0.391388 55.3683 2.55881 63.4675 6.67853 70.6064L0 95L24.9555 88.4537C31.8317 92.2046 39.5731 94.1813 47.4513 94.1836H47.471C73.4157 94.1836 94.5355 73.0649 94.5454 47.1092C94.5506 34.5303 89.6586 22.7034 80.7703 13.8058ZM47.4704 86.2335H47.4542C40.4336 86.2306 33.548 84.3438 27.5398 80.7796L26.1117 79.9313L11.3027 83.8162L15.2554 69.3777L14.3248 67.8974C10.408 61.6677 8.33975 54.4673 8.34323 47.0744C8.35135 25.5017 25.9041 7.95068 47.4861 7.95068C57.937 7.95416 67.7611 12.0292 75.1482 19.425C82.5353 26.8208 86.6011 36.6513 86.5976 47.1063C86.5883 68.6808 69.0368 86.2335 47.4704 86.2335ZM68.9324 56.9293C67.7565 56.3401 61.9732 53.4955 60.8947 53.1024C59.8174 52.7098 59.0323 52.5144 58.249 53.6915C57.4644 54.8685 55.2106 57.5184 54.5241 58.3029C53.8376 59.088 53.1522 59.1866 51.9757 58.5974C50.7993 58.0089 47.0095 56.7663 42.5163 52.7591C39.0199 49.6402 36.6594 45.7883 35.9729 44.6113C35.2875 43.433 35.9671 42.8578 36.4889 42.2108C37.7623 40.6295 39.0373 38.9718 39.4293 38.1873C39.8218 37.4022 39.6253 36.7151 39.3307 36.1266C39.0373 35.538 36.6849 29.7484 35.705 27.3925C34.7494 25.0999 33.7805 25.4095 33.0581 25.3735C32.3727 25.3393 31.5882 25.3324 30.8037 25.3324C30.0197 25.3324 28.7453 25.6263 27.6668 26.8046C26.5889 27.9822 23.5505 30.8275 23.5505 36.6171C23.5505 42.4067 27.7653 47.9998 28.3533 48.7849C28.9413 49.57 36.6478 61.4508 48.4469 66.5452C51.2533 67.7582 53.4439 68.4813 55.1526 69.0234C57.9706 69.9187 60.5341 69.7923 62.5612 69.4896C64.8214 69.1516 69.5198 66.6438 70.5008 63.8965C71.4808 61.1487 71.4808 58.794 71.1862 58.3029C70.8928 57.8123 70.1083 57.5184 68.9324 56.9293Z" fill="#FFF"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
        let isMouseOverSubmenu = {}; // Objeto para rastrear o estado de mouseover para cada submenu

        dropdownSubmenus.forEach(function(dropdownSubmenu, index) {
            let submenu = dropdownSubmenu.querySelector('.submenu');

            if (submenu) {
                // Inicializa a flag para o submenu atual como false
                isMouseOverSubmenu[index] = false;

                // Evento de mouseover para o submenu para definir a flag como true
                submenu.addEventListener('mouseover', function() {
                    isMouseOverSubmenu[index] = true;
                });

                // Evento de mouseleave para o submenu para definir a flag como false e tentar fechar o submenu
                submenu.addEventListener('mouseleave', function() {
                    isMouseOverSubmenu[index] = false;
                    // Tenta fechar o submenu após um curto delay para permitir transição suave entre submenu e menu pai
                    setTimeout(() => {
                        if (!isMouseOverSubmenu[index]) {
                            this.style.bottom = '10px'; // Fecha o submenu
                        }
                    }, 100); // Delay de 100ms
                });
            }

            // Evento de mouseover no menu pai para mostrar o submenu
            dropdownSubmenu.addEventListener('mouseover', function() {
                if (submenu) {
                    submenu.style.bottom = '-251px'; // Mostra o submenu
                }
            });

            // Evento de mouseleave no menu pai para fechar o submenu se o mouse não estiver sobre o submenu
            dropdownSubmenu.addEventListener('mouseleave', function() {
                // Fecha o submenu apenas se o mouse não estiver sobre o submenu
                setTimeout(() => {
                    if (!isMouseOverSubmenu[index] && submenu) {
                        submenu.style.bottom = '10px';
                    }
                }, 100); // Delay de 100ms
            });
        });

    });

    let sideMenu = document.querySelector('.side-menu');
    function handleSandwitch(x) {
        x.classList.toggle("change");
        sideMenu.classList.toggle("open-side");
    }

    let sideSubmenu = document.querySelector('.side-submenu');
    function openSideSubmenu() {
        sideSubmenu.classList.toggle('open-sidemenu');
    }


    let form = document.getElementById('formPesquisa');

    // Adiciona um ouvinte de eventos para o evento de 'submit'
    form.addEventListener('submit', function(e) {
        // Impede o formulário de ser enviado da maneira tradicional
        e.preventDefault();

        // Obtém o valor do campo de pesquisa
        var termoPesquisa = document.getElementById('inputPesquisa').value;

        // Verifica se o termo de pesquisa não está vazio
        if (termoPesquisa.trim() !== '') {
            // Redireciona para a URL desejada, inserindo o termo de pesquisa na URL
            window.location.href = '/pesquisa/' + encodeURIComponent(termoPesquisa);
        } else {
            alert('Por favor, digite um termo para pesquisa.');
        }
    });
</script>
