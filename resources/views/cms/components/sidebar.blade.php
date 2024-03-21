<!-- Sidebar -->
<ul class="navbar-nav bg-primario-az sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex flex-column h-auto align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
        <div class="sidebar-brand-text mx-3">Administração</div>
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets/site/images/logos-text/logo_amarelo.svg')}}" alt="" width="150px">
        </div>
        <div class="sidebar-brand-icon-small d-none">
            <img src="{{asset('assets/site/images/logos-text/P.svg')}}" alt="" width="30px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/" target="_blank">
            <i class="fas fa-fw fa-house-damage"></i>
            <span>Site</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Conteúdos
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDestaques" aria-expanded="true" aria-controls="collapseDestaques">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Destaques</span>
        </a>
        <div id="collapseDestaques" class="collapse" aria-labelledby="headingDestaques" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.destaques.index')}}">Todos os Destaques</a>
                <a class="collapse-item" href="{{route('admin.destaque.create')}}">Novo Destaque</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Páginas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Páginas Estáticas:</h6>
                <a class="collapse-item" href="{{route('admin.destaques.index')}}">Destaques</a>
                <a class="collapse-item" href="/sobre-nos">Sobre Nós</a>
                <a class="collapse-item" href="/politica-de-privacidade">Política de Privacidade</a>
                <a class="collapse-item" href="/termos-de-uso">Termos de Uso</a>
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

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contatos.index') }}">
            <i class="fas fa-fw fa-mail-bulk"></i>
            <span>Mensagens</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
