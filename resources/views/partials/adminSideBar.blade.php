<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-text mx-3">Fajri Jaya Travel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.pemesanan') }}">
            <span>Pemesanan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.jadwalPerjalanan') }}">
            <span>Jadwal Perjalanan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.kendaraan') }}">
           <span>Kendaraan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.supir') }}">
            <span>Supir</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.riwayatPemesanan') }}">
            <span>Riwayat Pemesanan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->