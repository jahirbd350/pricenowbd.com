<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header('Location: index.php');
}

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {
        require_once('../app/classes/Users.php');
        $logout = new Users();
        $message = $logout->adminLogout();
        $_SESSION['message'] = $message;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PriceNowBd Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/admin/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../assets/admin/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/admin/css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/admin/css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/admin/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/admin/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/admin/css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/admin/css/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="../assets/admin/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline"><?php echo $_SESSION['full_name']; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-sm-right" style="width: 180px">
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" style="width: 100px" class="btn btn-default btn-flat float-right">Profile</a>
                    </li>
                    <li class="user-footer">
                        <a href="?status=logout" style="width: 100px" class="btn btn-default btn-flat float-right">Sign out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">
            <img src="../assets/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Price Now BD</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../assets/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['full_name']; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <!--<li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Brands
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="brand_add.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="brands_manage.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Brands</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Models
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="model_add.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Model</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="models_manage.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Models</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
