<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/profile'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laboratorium Balittas</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profile
            </div>

            <!-- Nav - Profil Pengelolaan -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/lab_benih'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Lab. Benih</span></a>
            </li>

            <!-- Nav - Status  -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/lab_kultur'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Lab. Kultur Jaringan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/lab_tanah'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Lab. Tanah dan Tanaman</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/lab_opt'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Lab. OPT</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/lab_molekuler'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Lab. Molekuler</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/registration'); ?>">
                    <i class="fas fa-user"></i>
                    <span>Tambah Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->