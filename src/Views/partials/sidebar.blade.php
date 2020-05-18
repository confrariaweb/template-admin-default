<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CW <sup>IMOB</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.accounts.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Contas</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        CRM
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Leads</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOpportunity" aria-expanded="true" aria-controls="collapseOpportunity">
            <i class="fas fa-fw fa-cog"></i>
            <span>Oportunidades</span>
        </a>
        <div id="collapseOpportunity" class="collapse" aria-labelledby="headingOpportunity" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient" aria-expanded="true" aria-controls="collapseClient">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Clientes</span>
        </a>
        <div id="collapseClient" class="collapse" aria-labelledby="headingClient" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseContact">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Contatos</span>
        </a>
        <div id="collapseContact" class="collapse" aria-labelledby="headingContact" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Tarefas
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTask" aria-expanded="true" aria-controls="collapseTask">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Tarefas</span>
        </a>
        <div id="collapseTask" class="collapse" aria-labelledby="headingTask" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
                <a class="collapse-item" href="#">Tipos</a>
                <a class="collapse-item" href="#">Status</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Propriedades
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProperty" aria-expanded="true" aria-controls="collapseProperty">
            <i class="fas fa-fw fa-folder"></i>
            <span>Imoveis</span>
        </a>
        <div id="collapseProperty" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseType" aria-expanded="true" aria-controls="collapseType">
            <i class="fas fa-fw fa-folder"></i>
            <span>Tipos</span>
        </a>
        <div id="collapseType" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseFeature" aria-expanded="true" aria-controls="collapseFeature">
            <i class="fas fa-fw fa-folder"></i>
            <span>Característica</span>
        </a>
        <div id="collapseFeature" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Configurações
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSite" aria-expanded="true" aria-controls="collapseSite">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sites</span>
        </a>
        <div id="collapseSite" class="collapse" aria-labelledby="headingSite" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
                <a class="collapse-item" href="#">Domínios</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Usuários</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Listar</a>
                <a class="collapse-item" href="#">Adicionar</a>
                <a class="collapse-item" href="#">Perfis</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="true" aria-controls="collapseLocation">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Localizações</span>
        </a>
        <div id="collapseLocation" class="collapse" aria-labelledby="headingLocation" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Países</a>
                <a class="collapse-item" href="#">Estados</a>
                <a class="collapse-item" href="#">Cidades</a>
                <a class="collapse-item" href="#">Bairros</a>
                <a class="collapse-item" href="#">Endereços</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Templates</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Schedule</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Integrações</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Importações</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Options</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>