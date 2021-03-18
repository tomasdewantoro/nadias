<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">POSYANDU DAHLIA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/informasiPenyakit" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Informasi Penyakit
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dataGejala" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Gejala
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dataPenyakit" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Penyakit
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dataAturan" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Rule / Aturan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/dataBalita" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Balita
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/riwayatDiagnosa" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Riwayat Diagnosa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
