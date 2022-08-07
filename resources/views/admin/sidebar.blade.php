  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="margin-left: 5%">
      <span class="brand-text font-weight-bold">Desa Jambesari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#">{{ Auth::user()->name }}</a> <br>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/warga" class="nav-link {{ (request()->is('admin/warga/*') || request()->is('admin/warga')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-alt"></i>
              <p> Data Warga</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/berita" class="nav-link {{ ((request()->is('admin/berita/*') || request()->is('admin/berita')) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p> Data Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/program" class="nav-link {{ ((request()->is('admin/program/*') || request()->is('admin/program')) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tasks"></i>
              <p> Data Program</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/program-lembaga" class="nav-link {{ ((request()->is('admin/program-lembaga/*') || request()->is('admin/program-lembaga')) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tasks"></i>
              <p> Data Program Lembaga</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/lembaga" class="nav-link {{ ((request()->is('admin/lembaga/*') || request()->is('admin/lembaga')) ) ? 'active' : '' }}">
              <i class="nav-icon fa fa-building"></i>
              <p> Data Lembaga</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/galeri" class="nav-link {{ ((request()->is('admin/galeri/*') || request()->is('admin/galeri')) ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-camera"></i>
              <p> Data Galeri</p>
            </a>
          </li>
        </ul>
        <a href="/logout" class="btn btn-danger btn-block">Logout</a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
