<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-wrap d-flex align-items-center text-center">
    <img src="./imagenes/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Silvester Antonio Bravo Lopéz</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center text-center">
      <div class="image">
        <img src="./imagenes/Admin.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info text-wrap">
        <a href="#" class="d-block">
          {{ auth()->user()->Nombres }} {{ auth()->user()->Apellidos }}
        </a>
        <small href="javascript:" class="text-light">
          {{ auth()->user()->Privilegio === 'A' ? 'Administrador' : 'Secretario' }}
        </small>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscador" aria-label="Search">
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
        <li class="nav-item ">
          <a href="/sistema/inicio.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Inicio
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="javascript:" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              Usuarios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./usuarios" class="nav-link">
                <i class="far fa-check-circle nav-icon"></i>
                <p>Listado de Usuarios</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./usuarios/registrar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registrar Usuario</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/sistema/Estudiante/estudiantes x.php" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
              Estudiantes
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/Representante/representante x.php" class="nav-link">
            <i class="nav-icon fas fa-male"></i>
            <p>
              Representante
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/Profesor/profesor x.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Profesores
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/año_seccion x.php" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Años y Secciones
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/periodos x.php" class="nav-link">
            <i class="nav-icon fas fa-calendar"></i>
            <p>
              Periodos
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/materias x.php" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Materias
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/sistema/calificaciones x.php" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Calificaciones
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
