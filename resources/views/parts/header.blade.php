<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Início</a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Contato</a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
            </li>
            <!--end::Navbar Search-->

            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img
                                    src="{{Vite::asset('resources/images/user1-128x128.jpg')}}"
                                    alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3"
                                />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-end fs-7 text-danger"
                                    ><i class="bi bi-star-fill"></i
                                        ></span>
                                </h3>
                                <p class="fs-7">Ligue-me quando você puder</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 horas atrás
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img
                                    src="{{Vite::asset('resources/images/user8-128x128.jpg')}}"
                                    alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3"
                                />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                                </h3>
                                <p class="fs-7">Eu recebi sua mensagem</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 horas atrás
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img
                                    src="{{Vite::asset('resources/images/user3-128x128.jpg')}}"
                                    alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3"
                                />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                                </h3>
                                <p class="fs-7">Olá</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 horas atrás
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Todas as mensagens</a>
                </div>
            </li>
            <!--end::Messages Dropdown Menu-->

            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notificações</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> 4 Novas mensagens
                        <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> 8 solicitações
                        <span class="float-end text-secondary fs-7">12 horas</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-file-earmark-fill me-2"></i> 3 novos relatórios
                        <span class="float-end text-secondary fs-7">2 dias</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer"> Todas as notificações </a>
                </div>
            </li>
            <!--end::Notifications Dropdown Menu-->

            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            <!--end::Fullscreen Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img
                        src="{{Vite::asset('resources/images/user2-160x160.jpg')}}"
                        class="user-image rounded-circle shadow"
                        alt="User Image"
                    />
                    <span class="d-none d-md-inline">
                        {{auth()->user()->name}}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img
                            src="{{Vite::asset('resources/images/user2-160x160.jpg')}}"
                            class="rounded-circle shadow"
                            alt="User Image"
                        />
                        <p>
                            {{auth()->user()->name}}
                            <small>Admin</small>
                        </p>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    <li class="user-body">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Seguidores</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Vendas</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Amigos</a>
                            </div>
                        </div>
                        <!--end::Row-->
                    </li>
                    <!--end::Menu Body-->
                    <!--begin::Menu Footer-->
                    <li class="user-footer">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger float-end">Sair</button>
                        </form>
                        <a href="#" class="btn btn-outline-secondary">Perfil</a>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->
