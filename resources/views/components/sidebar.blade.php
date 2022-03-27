<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/home')}}" class="brand-link">
    <!--  <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8"> -->

    <img src="{{asset('template/images/logo.png')}}" class="brand-image img-circle elevation-3" style="opacity: .8" alt="User Image">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="/home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard

            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/destinations')}}" class="nav-link active">
            <i class="nav-icon fas fa-map"></i>
            <p>
              Destinations
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/categories')}}" class="nav-link active">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Categories
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/packages')}}" class="nav-link active">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              Packages
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/texiservice')}}" class="nav-link active">
            <i class="nav-icon fas fa-car"></i>
            <p>
              Texi Services
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/visitors')}}" class="nav-link active">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Visitors
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{url('admin/visitors')}}" class="nav-link active">
            <i class="nav-icon fas fa-question"></i>
            <p>
              Enquiries
            </p>
          </a>
        </li>


        <li class="nav-item menu-open">
          <a href="{{url('logout')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
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