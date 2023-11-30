<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Junior Web Developer</title>

    <link rel="icon" href="../dist/img/digitalent.png">

</head>



<!-- Sidebar agar tertutup -->

<body class="hold-transition sidebar-mini sidebar-collapse">

    <div class="wrapper">

        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

                </li>

                <li class="nav-item d-none d-sm-inline-block">

                    <a href="../dashboard.php" class="nav-link">Home</a>

                </li>

            </ul>



            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">

                <!-- Navbar Search -->

                <li class="nav-item">

                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">

                        <i class="fas fa-search"></i>

                    </a>

                    <div class="navbar-search-block">

                        <form class="form-inline">

                            <div class="input-group input-group-sm">

                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

                                <div class="input-group-append">

                                    <button class="btn btn-navbar" type="submit">

                                        <i class="fas fa-search"></i>

                                    </button>

                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                                        <i class="fas fa-times"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </li>



            </ul>

        </nav>

        <!-- /.navbar -->



        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->

            <a href="#" class="brand-link">

                <img src="../dist/img/digitalent.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

                <span class="brand-text font-weight-light">JWD B</span>

            </a>



            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar user (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="image">

                        <img src="../dist/img/hos.jpg" class="img-circle elevation-2" alt="User Image">

                    </div>

                    <div class="info">

                        <a href="#" class="d-block">SISTEM RAWAT INAP</a>

                    </div>

                </div>



                <!-- SidebarSearch Form -->

                <div class="form-inline">

                    <div class="input-group" data-widget="sidebar-search">

                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

                        <div class="input-group-append">

                            <button class="btn btn-sidebar">

                                <i class="fas fa-search fa-fw"></i>

                            </button>

                        </div>

                    </div>

                </div>



                <!-- Sidebar Menu -->

                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

                        <li class="nav-item">

                            <a href="#" class="nav-link">

                                <i class="nav-icon fas fa-tachometer-alt"></i>

                                <p>

                                    Dashboard

                                    <i class="right fas fa-angle-left"></i>

                                </p>

                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="../dashboard.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Dashboard</p>

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="../ruangan/dashboard.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Ruangan</p>

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="../dokter/dashboard.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Dokter</p>

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="../pasien/dashboard.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>

                                        <p>Pasien</p>

                                    </a>

                                </li>

                        </li>

                    </ul>



                    <li class="nav-item">

                        <a href="../index.php" class="nav-link" onclick="alert('Berhasil logout!');">

                            <i class="nav-icon fas fa-edit"></i>

                            <p>

                                Logout

                            </p>

                        </a>

                    </li>

                </nav>

                <!-- /.sidebar-menu -->

            </div>

            <!-- /.sidebar -->

        </aside>