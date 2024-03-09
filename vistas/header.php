<?php
session_start();
if (!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "") {
    header("Location: /finnapp/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Finnapp | Hogar clínica San Juan de Dios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Tablero compuesto de componentes para adminsitrar plantilla." />
    <meta name="keywords" content="Administración de tablero compuesto de páginas php, JavaScript, CSS, HTML, Bootstrap." />
    <meta name="author" content="SP" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logoGranada.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="./" class="b-brand">
                    <div class="b-bg">
                        
                    </div>
                    <span class="b-title">FINNAPP</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item active">
                        <a href="/finnapp" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                        class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">Button</a></li>
                            <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a>
                            </li>
                            <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                            <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                            <li class=""><a href="bc_typography.html" class="">Typography</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms & table</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form
                                elements</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html"
                            class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-pie-chart"></i></span><span
                                class="pcoded-mtext">Chart</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span
                                class="pcoded-micon"><i class="feather icon-map"></i></span><span
                                class="pcoded-mtext">Maps</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe"
                        class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-lock"></i></span><span
                                class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span
                                class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span
                                class="pcoded-mtext">Sample page</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                <img src="assets/images/logo_mobile.png" class="img-fluid">
                </div>
                <span class="b-title">Plantilla</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                            class="feather icon-maximize"></i></a></li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Buscar . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $_SESSION['firts_name'];  ?></span>
                                <a href="cerrar.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Configuración</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i>
                                        Perfil</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                        Mensajes</a></li>
                                <li><a href="cerrar.php" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">