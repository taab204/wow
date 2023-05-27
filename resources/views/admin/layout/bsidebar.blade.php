  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin_home')}}" class="brand-link">
      <img src="{{asset ('back/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TechymTel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('uploads/'.Auth::guard('admin')->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar Menu" aria-label="Search">
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

          <li class="nav-item {{ Request::is('admin/home') ? 'menu-open' : '' }}">
            <a href="{{ route('admin_home') }}" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">CONFIGURACIONES</li>

          <li class="nav-item {{ Request::is('admin/edit-profile')||Request::is('admin/slide/view') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/edit-profile')||Request::is('admin/slide/view') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Configuracion Web<i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_slide_view') }}" class="nav-link {{ Request::is('admin/slide/view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Baner <small>+ Barra laterales</small></p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item {{ Request::is('admin/empleado/add')||Request::is('admin/empleado/view')||Request::is('admin/area/add')||Request::is('admin/area/view')||Request::is('admin/planes/add')||Request::is('admin/planes/view') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/empleado/add')||Request::is('admin/empleado/view')||Request::is('admin/area/view')||Request::is('admin/area/add')||Request::is('admin/planes/add')||Request::is('admin/planes/view') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Configuracion Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin_area_view') }}" class="nav-link {{ Request::is('admin/area/add')||Request::is('admin/area/view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_planes_view') }}" class="nav-link {{ Request::is('admin/planes/add')||Request::is('admin/planes/view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Planes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_empleado_view') }}" class="nav-link {{ Request::is('admin/empleado/add')||Request::is('admin/empleado/view') ? 'active' : '' }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empleados</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estados</p>
                </a>
              </li>


            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Almacen<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro Materiales</p>
                </a>
              </li>

            </ul>
          </li> --}}
          <li class="nav-header">Consulta Reniec</li>
          <li class="nav-item {{ Request::is('admin/reniec/view') ? 'menu-open' : '' }}">
            <a href="{{ route('admin_reniec_view') }}" class="nav-link {{ Request::is('admin/reniec/view') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>RENIEC<span class="right badge badge-danger">Nuevo</span>
              </p>
            </a>
          </li>

          <li class="nav-header">WEB</li>
          <li class="nav-item {{ Request::is('admin/datero/view') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/datero/view') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Datero Web<i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="{{ route('admin_profile') }}" class="nav-link {{ Request::is('admin/edit-profile') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solo de Prueba Perfil</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('admin_datero_view') }}" class="nav-link {{ Request::is('admin/datero/view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datero <small>+ Bandeja</small></p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-header">BackOffice </li>
          <li class="nav-item {{ Request::is('admin/backoffice/view') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/backoffice/view') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Datero Bandeja Web<i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="{{ route('admin_profile') }}" class="nav-link {{ Request::is('admin/edit-profile') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solo de Prueba Perfil</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('admin_daterobackoffice_view') }}" class="nav-link {{ Request::is('admin/backoffice/view') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datero <small>+ Pendientes</small></p>
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
