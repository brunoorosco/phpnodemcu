<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="<?= asset('Favicon.ico') ?>" type="image/x-icon"> -->
    <link href='<?= asset('bootstrap-4.1.3/css/bootstrap.min.css') ?>' rel="stylesheet">
    <link href='<?= asset('font-awesome/css/font-awesome.css') ?>' rel="stylesheet">
    <link href="<?= asset('css/sidebar.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/load.css') ?>" rel="stylesheet">
    <!-- <link href="<?= asset('css/tabela.css') ?>" rel="stylesheet"> -->
    <!-- Toastr style -->
    <!-- <link href="<?= asset('css/plugins/toastr/toastr.min.css') ?>" rel="stylesheet"> -->

    <!-- Gritter -->
    <!-- <link href="<?= asset('js/plugins/gritter/jquery.gritter.css') ?>" rel="stylesheet"> -->

    <!-- <link href="<?= asset('css/animate.css') ?>" rel="stylesheet"> -->
    <?= $v->section("css"); ?>
    <title><?= $v->e($title) ?></title>
</head>

<body>

    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <div class="ajax_load_box_title">Aguarde, carrengando...</div>
        </div>
    </div>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#" class="text-white">System Lab</a>
                    <div id="close-sidebar">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img alt="image" class="img-circle" src="<?= asset('img/avatar-2.png') ?>" width="45" />
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong class="text-white"><?= $_SESSION['userName'] ?></strong>
                        </span>
                        <span class="user-role text-white">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span class="text-black-50">Geral</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Cadastro</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="<?= site("users/new"); ?>">Funcionário</a></li>
                                    <li><a href="<?= site("sensors/new"); ?>">Máquina</a></li>
                                    <li><a href="<?= site("empresa/add"); ?>">Empresas</a></li>
                                    <li><a href="<?= site("func/add"); ?>">Funcionários</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-search"></i>
                                <span>Consulta</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="<?= site("sensors"); ?>">Máquinas</a></li>
                                    <li><a href="<?= site("empresa"); ?>">Empresas</a></li>
                                    <li><a href="<?= site("ensaio"); ?>">Ensaios</a></li>
                                    <li><a href="<?= site("equipamento"); ?>">Equipamentos</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="<?= site()?>">
                                <i class="fa fa-tachometer"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Charts</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Pie chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Line chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Bar chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Histogram</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Google maps</a>
                                    </li>
                                    <li>
                                        <a href="#">Open street map</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span class="text-black-50">Extra</span>
                        </li>
                        <li>
                            <a href="<?= site("atendimento"); ?>">
                                <i class="fa fa-book"></i>
                                <span>Plano de Atendimento</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer ">
                <a href="#">
                    <i class="fa fa-bell text-muted"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope text-muted"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog text-muted"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="<?= $router->route("app.logoff"); ?>">
                    <i class="fa fa-power-off text-muted"></i>
                </a>
            </div>
        </nav>

        <!-- sidebar-wrapper  -->
        <main class="page-content">

            <?= $v->section("content"); ?>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Mainly scripts -->
    <script src="<?= asset('js/jquery.js') ?>"></script>

    <script src="<?= asset('js/popper.js') ?>"></script>
    <script src="<?= asset('bootstrap-4.1.3/js/bootstrap.min.js') ?>"></script>

    <script src="<?= asset('js/script.min.js') ?>"></script>

    <!-- Peity -->
    <script src="<?= asset('js/plugins/peity/jquery.peity.min.js') ?>"></script>
    <script src="<?= asset('js/demo/peity-demo.js') ?>"></script>

    <!-- Custom and plugin javascript -->
    <!-- <script src="js/inspinia.js"></script> -->
    <script src="<?= asset('js/plugins/pace/pace.min.js') ?>"></script>

    <!-- jQuery UI -->
    <script src="<?= asset('js/jquery-ui.js') ?>"></script>

    <!-- GITTER -->
    <script src="<?= asset('js/plugins/gritter/jquery.gritter.min.js') ?>"></script>

    <!-- Sparkline -->
    <script src="<?= asset('js/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Sparkline demo data  -->
    <script src="<?= asset('js/demo/sparkline-demo.js') ?>"></script>

    <!-- Toastr -->
    <script src="<?= asset('js/plugins/toastr/toastr.min.js') ?>"></script>
    <script src="<?= asset('js/sidebar.js') ?>"></script>


    <?= $v->section("js"); ?>

</body>

</html>