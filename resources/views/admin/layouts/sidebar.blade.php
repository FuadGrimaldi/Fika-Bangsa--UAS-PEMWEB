  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="{{ asset('stream/assets/images/fika.png') }}" width="100px" height="50px" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("adminlte/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super Asep</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.transaction')}}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Transactions
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.movie')}}" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Movies
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.package')}}" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Packages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>