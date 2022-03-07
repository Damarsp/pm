<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ASPIRASI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (in_groups('admin')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            ADMIN
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/datapetugas">
                <i class="fas fa-users-cog"></i>
                <span>Data Petugas</span></a>
        </li>

        <!-- Verifikasi & Validasi -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/verifikasi">
                <i class="fas fa-tools"></i>
                <span>Verifikasi & Validasi</span></a>
        </li>

        <!-- Memberi Tanggapan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/tanggapan">
                <i class="fas fa-reply-all"></i>
                <span>Memberi Tanggapan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/history">
                <i class="far fa-clock"></i>
                <span>History Pengaduan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
    <?php endif; ?>


    <?php if (in_groups('staff')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            PETUGAS
        </div>

        <!-- Verifikasi & Validasi -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/verifikasi">
                <i class="fas fa-tools"></i>
                <span>Verifikasi & Validasi</span></a>
        </li>

        <!-- Memberi Tanggapan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/tanggapan">
                <i class="fas fa-reply-all"></i>
                <span>Memberi Tanggapan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/history">
                <i class="far fa-clock"></i>
                <span>History Pengaduan</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
    <?php endif; ?>

    <?php if (in_groups('user')) : ?>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(''); ?>/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>



        <hr class="sidebar-divider my-o">

        <!-- Heading -->
        <div class="sidebar-heading">
            Masyarakat
        </div>

        <!-- Memberi Tanggapan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/pengaduan">
                <i class="fas fa-archive"></i>
                <span>Buat Laporan Pengaduan</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/history">
                <i class="far fa-clock"></i>
                <span>History Pengaduan</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Logout
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (!logged_in()) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Login
        </div>
        <!-- Nav Item - Login -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login'); ?>">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->