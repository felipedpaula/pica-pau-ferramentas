<!-- Sidebar -->
<ul class="navbar-nav bg-primario-az sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex flex-column h-auto align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
        <div class="sidebar-brand-text mx-3">Administração</div>
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{asset('assets/site/images/logos-text/logo_amarelo.svg')}}" alt="" width="189px" height="54px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Conteúdos
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDestaques" aria-expanded="true" aria-controls="collapseDestaques">
            <i class="fas fa-fw fa-file"></i>
            <span>Destaques</span>
        </a>
        <div id="collapseDestaques" class="collapse" aria-labelledby="headingDestaques" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Categorias destaques</a>
                <a class="collapse-item" href="">Novo destaque</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
            <i class="fas fa-fw fa-file"></i>
            <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Nova postagem</a>
                <a class="collapse-item" href="cards.html">Todas as postagens</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePaginas" aria-expanded="true" aria-controls="collapsePaginas">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Páginas</span>
        </a>
        <div id="collapsePaginas" class="collapse" aria-labelledby="headingPaginas" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Páginas Estáticas:</h6>
                <a class="collapse-item" href="cards.html">Sobre Nós</a>
                <a class="collapse-item" href="buttons.html">Política de Privacidade</a>
                <a class="collapse-item" href="cards.html">Termos de Uso</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEventos" aria-expanded="true" aria-controls="collapseEventos">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Eventos</span>
        </a>
        <div id="collapseEventos" class="collapse" aria-labelledby="headingEventos" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="cards.html">Novo evento</a>
                <a class="collapse-item" href="buttons.html">Todos os eventos</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleria" aria-expanded="true" aria-controls="collapseGaleria">
            <i class="fas fa-fw fa-image"></i>
            <span>Galeria</span>
        </a>
        <div id="collapseGaleria" class="collapse" aria-labelledby="headingGaleria" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="cards.html">Nova Galeria</a>
                <a class="collapse-item" href="buttons.html">Todas as galerias</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilitários
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategorias" aria-expanded="true" aria-controls="collapseCategorias">
            <i class="fas fa-fw fa-archive"></i>
            <span>Categorias</span>
        </a>
        <div id="collapseCategorias" class="collapse" aria-labelledby="headingCategorias" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.categoria.create')}}">Nova categoria</a>
                <a class="collapse-item" href="{{route('admin.categorias.index')}}">Todas as categorias</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdutos" aria-expanded="true" aria-controls="collapseProdutos">
            <i class="fas fa-fw fa-box"></i>
            <span>Produtos</span>
        </a>
        <div id="collapseProdutos" class="collapse" aria-labelledby="headingProdutos" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.produto.create')}}">Novo produto</a>
                <a class="collapse-item" href="{{route('admin.produtos.index')}}">Todos os produtos</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Configurações
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuários</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.users.index')}}">Todos os usuários</a>
                <a class="collapse-item" href="{{route('admin.user.create')}}">Registrar novo</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configurações</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
