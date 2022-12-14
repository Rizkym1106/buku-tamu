  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ URL::asset('admin/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('admin/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">M Rizky Maulana</a>
        </div>
      </div>

    <!-- Sidebar -->
    <div class="sidebar">
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
            <a href="{{ route('dashboard.index') }}" class="nav-link {{ (request()->routeIs('dashboard.index')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('manajemen_buku_tamu.index') }}" class="nav-link {{ (request()->routeIs('manajemen_buku_tamu.index')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Manajemen Buku Tamu
                </p>
              </a>
              <li class="nav-item">
                <a href="{{ route("survey_kepuasan_tamu.index") }}" class="nav-link {{ (request()->routeIs('survey_kepuasan_tamu.index')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-poll-h"></i>
                  <p>
                    Survey Kepuasan Tamu
                  </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link {{ (request()->routeIs('user.index')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Admin
                </p>
              </a>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>