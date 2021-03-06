<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}"class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> ABC INVENTORY</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (auth()->user()->level == "admin")
               <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    Manage User
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('listuser')}}" class="nav-link">
                      <i class="fas fa-user-edit nav-icon"></i>
                      <p>List User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-close">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-industry"></i>
                  <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('addkategori')}}" class="nav-link">
                      <i class="fas fa-cart-plus nav-icon"></i>
                      <p>Add a Category</p>
                    </a>
                  </li>
                  <li class="nav-item"> 
                    <a href="{{route('konfproduct')}}" class="nav-link">
                      <i class="fas fa-table nav-icon"></i>
                      <p>Konfirmasi Product</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('listlaporan')}}" class="nav-link">
                    <i class="nav-icon fas fa-list-ul py-2"></i>
                    <p>
                      List Laporan
                    </p>
                  </a>
                </li>
                @endif
          @if (auth()->user()->level == "pengguna")
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"> 
                <a href="{{route('listproduct')}}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('laporan')}}" class="nav-link">
                  <i class="far fa-file-pdf nav-icon"></i>
                  <p>Buat Laporan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt py-2"></i>
              <p>
                Log-out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>