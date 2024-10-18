<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Data
    </div>

    <!-- Nav Item - Kelola User -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/users') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Kelola User</span>
        </a>
    </li>

    <!-- Nav Item - Kelola Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/categories') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Kelola Kategori</span>
        </a>
    </li>

    <!-- Nav Item - Kelola Post -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/post') }}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Kelola Post</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
