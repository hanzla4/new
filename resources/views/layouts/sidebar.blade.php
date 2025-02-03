<!DOCTYPE html>
<html lang="en" data-menu-color="light" data-topbar-color="light">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Sidenav Light | Drezoc - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
</head>
<style>


</style>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='index.html'>
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="18">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="24">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='index.html'>
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="18">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="24">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class="menu-link waves-effect" href="{{ route('dashboard.index') }}">
                            <span class="menu-icon"><i data-lucide="airplay"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <span class="badge bg-info rounded-pill ms-auto">3</span>
                        </a>
                    </li>

                    <li class="menu-title">Custom</li>


                    <li class="menu-item">
                        <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="user"></i></span>
                            <span class="menu-text"> User Manager </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuExpages">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link waves-effect' href="{{ route('users.index') }}">
                                        <span class="menu-icon"><i data-lucide="users"></i></span>
                                        <span class="menu-text"> User List </span>
                                    </a>

                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='pages-invoice.html'>
                                        <span class="menu-icon"><i data-lucide="user-plus"></i></span>
                                        <span class="menu-text">Add user</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
