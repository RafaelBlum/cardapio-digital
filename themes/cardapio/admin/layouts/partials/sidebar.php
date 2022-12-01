<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <!-- ============================== SIDEBAR SCROLLBAR ITENS ============================== -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <!-- === HOME INICIAL === -->
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="<?= $router->route("admin.admin");?>" class="mm-active">
                        <i class="fa fa-rocket fa-icon-style"></i>
                        Home
                    </a>
                </li>

                <!-- === LISTAGEM USUÁRIOS === -->
                <li class="app-sidebar__heading">Listagens</li>
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-icon-style"></i>
                        Usuários
                        <i class="fa fa-angle-down fa-menu-style"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= $router->route("users.users") ?>">
                                <i class="metismenu-icon"></i>
                                Listar usuários
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("users.create") ?>">
                                <i class="metismenu-icon"></i>
                                Novo usuário
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("users.users") ?>">
                                <i class="metismenu-icon"></i>
                                Listar endereços
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- === POSTAGENS === -->
                <li class="app-sidebar__heading">Blog</li>
                <li>
                    <a href="#">
                        <i class="fa fa-newspaper fa-icon-style"></i>
                        Postagens
                        <i class="fa fa-angle-down fa-menu-style"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= $router->route("users.users") ?>">
                                <i class="metismenu-icon"></i>
                                Listar postagens
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("users.users") ?>">
                                <i class="metismenu-icon"></i>
                                Nova postagem
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- === LINK ONE === -->
                <li class="app-sidebar__heading">Recurso</li>
                <li>
                    <a href="#">
                        <i class="fa fa-boxes fa-icon-style"></i>
                        Item
                    </a>
                </li>

                <!-- ===  === -->
                <li class="app-sidebar__heading">PHP Master</li>
                <li>
                    <a href="#">
                        <i class="fab fa-php fa-icon-style"></i>
                        PHP basico
                        <i class="fa fa-angle-down fa-menu-style"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= $router->route("basic") ?>">
                                <i class="metismenu-icon"></i>
                                Basico php
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("strings") ?>">
                                <i class="metismenu-icon"></i>
                                Strings manip.
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("dates") ?>">
                                <i class="metismenu-icon"></i>
                                Datas
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("arrays") ?>">
                                <i class="metismenu-icon"></i>
                                Arrays
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("folders") ?>">
                                <i class="metismenu-icon"></i>
                                Gestão de diretórios
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("forms") ?>">
                                <i class="metismenu-icon"></i>
                                Formulários
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("uploads") ?>">
                                <i class="metismenu-icon"></i>
                                Uploads
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("interURL") ?>">
                                <i class="metismenu-icon"></i>
                                interURL
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("cookiesSessions") ?>">
                                <i class="metismenu-icon"></i>
                                cookies Sessions
                            </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fab fa-php fa-icon-style"></i>
                        PHP POO
                        <i class="fa fa-angle-down fa-menu-style"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= $router->route("classes") ?>">
                                <i class="metismenu-icon"></i>
                                Classes
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("relationships") ?>">
                                <i class="metismenu-icon"></i>
                                Relacionamentos
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("bank") ?>">
                                <i class="metismenu-icon"></i>
                                Especialização
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("pdo") ?>">
                                <i class="metismenu-icon"></i>
                                PDO
                            </a>
                        </li>
                        <li>
                            <a href="<?= $router->route("securit") ?>">
                                <i class="metismenu-icon"></i>
                                Segurança/Boas práticas
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fab fa-php fa-icon-style"></i>
                        Components Php
                        <i class="fa fa-angle-down fa-menu-style"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= $router->route("components") ?>">
                                <i class="metismenu-icon"></i>
                                Componentes
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
