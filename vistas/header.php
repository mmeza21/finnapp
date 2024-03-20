<?php session_start();
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
    <link rel="icon" href="/finnapp/assets/images/logoGranada.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="/finnapp/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="/finnapp/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="/finnapp/assets/css/style.css">
    <!-- main css -->
    <link rel="stylesheet" href="/finnapp/assets/css/main.css">
    <link rel="stylesheet" href="/finnapp/assets/css/global.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="/finnapp/assets/css/custom.css">
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.css">
    <link rel="stylesheet" href="/finnapp/assets/css/datatable.css">
    <!-- Modal -->
    <link rel="stylesheet" href="/finnapp/assets/css/modal.css">
    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <a href="/finnapp" class="b-brand">
                    <div class="b-bg">
                    <img src="../assets/images/logoGranada.png" class="img-fluid">
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
                        <label>Administración</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                        class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Credenciales</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="/finnapp/page/users.php" class="">Usuarios</a></li>
                            <li class=""><a href="/finnapp/page/rols.php" class="">Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="/finnapp" class="b-brand">
                <div class="b-bg">
                <img src="/finnapp/assets/images/logoGranada.png" class="img-fluid">
                </div>
                <span class="b-title">Finnapp</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i
                            class="feather icon-maximize"></i></a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="/finnapp/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $_SESSION['firts_name'];  ?></span>
                                <a href="/finnapp/controller/session.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Configuración</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i>
                                        Perfil</a></li>
                                <li><a href="/finnapp/controller/session.php" class="dropdown-item"><i class="feather icon-lock"></i>
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