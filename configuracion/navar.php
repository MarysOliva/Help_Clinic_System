
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plantilla/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../plantilla/AdminLTE-3.2.0/dist/css/adminlte.min.css">


  <style>
[class*=sidebar-dark-] {
    background-color: #b3b5ff;
}

    [class*=sidebar-dark-] .nav-header {
    background-color: inherit;
    color: #000000;
}

.navbar-white {
    background-color: #dbdbdb;
    color: #000000;
}
   


[class*=sidebar-dark] .btn-sidebar, [class*=sidebar-dark] .form-control-sidebar {
    background-color: #ededed;
    border: 1px solid #b5c8db;
    color: #fff;
}

[class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link {
    color: #00040a;
}
[class*=sidebar-dark-] .sidebar a {
    color: #01040a;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <!-- Navbar -->
  <nav  class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
            </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        
                <div class="dropdown-divider"></div>
                <a href="/Help_Clinic_System/vistas/tablero/perfil.php" class="dropdown-item">
                    <i class="fa fa-user"></i> Perfil (DAVIDS)
                </a>
                <div class="dropdown-divider"></div>
                <a href="/Help_Clinic_System/login.php" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> Salir
                </a>         
        </li>


            <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
            </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- style="background-color:rgb(255, 255, 255);" -->
  <aside  class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <a  href="#" class="brand-link">
      <img src="../../imagenes/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span  class="brand-text font-weight-" >Help Clinic System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <br>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input  class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
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
               <!-- SELECCIONA  EL ROL DEL USUARIO -->
              
            
            <!-- Valida si tiene permiso para consultar la pantalla tablero -->
           <li class="nav-item menu-open">
                  <a href="/Help_Clinic_System/vistas/tablero/tablero.php" class="nav-link active">
                    <i class="fa fa-home"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
           

                <li class="nav-item">
                  <a href="/Help_Clinic_System/vistas/tablero/perfil.php" class="nav-link">
                    <i class="fa fa-user"></i>
                    <p>
                      Perfil
                      <span class="right badge badge-danger">Editar</span>
                    </p>
                  </a>
                </li>
            

           

          
          
          
         
          <li class="nav-header">Administrar Sistema</li>

        <!-- Inicio Menu personas -->
          <li class="nav-item">
           <!-- Valida si tiene permiso para consultar el modulo personas -->
           <a href="#" class="nav-link">
                  <i class="fas fa-users"></i>
                    <i class="fa-solid fa-people-arrows-left-right"></i>
                    <p>
                      Personas
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
            <ul class="nav nav-treeview">
              <!-- Valida si tiene permiso para consultar la pantalla administradores -->
           <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/personas/usuarios.php" class="nav-link">
                            <p>Usuarios</p>
                          </a>
                        </li>
             <!-- Valida si tiene permiso para consultar la pantalla Clientes -->
             <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/personas/medicos.php" class="nav-link">
                            <p>Medicos</p>
                          </a>
                        </li>
             <!-- Valida si tiene permiso para consultar la pantalla PROVEEDORES -->
             <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/personas/pacientes.php" class="nav-link">
                            <p>Pacientes</p>
                          </a>
                        </li>        
              
            </ul>
          </li>
          <!-- Fin Menu personas -->

           <!-- inicio Menu catalogo -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-images"></i>
              <p>
                Citas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Valida si tiene permiso para consultar la pantalla del CRUD Bienvenida -->
             <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/citas/administrar_citas.php" class="nav-link">
                            <p>Administrar citas</p>
                          </a>
                        </li>
             <!-- Valida si tiene permiso para consultar la pantalla del CRUD PORTAFOLIO -->
        <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/citas/especialidades.php" class="nav-link">
                            <p>Especialidades</p>
                          </a>
                        </li>
              <!-- Valida si tiene permiso para consultar la pantalla del CRUD CATALOGOS -->
            <li class="nav-item">
                  <a href="/Help_Clinic_System/vistas/citas/horarios.php" class="nav-link">
                    <p>Horarios</p>
                  </a>
                </li>            
              
            </ul>
          </li>
          <!-- Fin Menu catalogo -->    
          
           <!-- inicio Menu seguridad -->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user-shield"></i>
              <p>
                Seguridad
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Valida si tiene permiso para consultar la pantalla del CRUD Bienvenida -->
             <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/seguridad/roles.php" class="nav-link">
                            <p>Roles</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/seguridad/roles.php" class="nav-link">
                            <p>Objetos</p>
                          </a>
                        </li>
             <!-- Valida si tiene permiso para consultar la pantalla del CRUD PORTAFOLIO -->
        <li class="nav-item">
                          <a href="/Help_Clinic_System/vistas/seguridad/permisos.php" class="nav-link">
                            <p>Permisos</p>
                          </a>
                        </li>
                         <!-- Valida si tiene permiso para consultar la pantalla del CRUD PORTAFOLIO -->
        <li class="nav-item">
                          <a href="../../vistas/catalogo/vista_portafolio.php" class="nav-link">
                            <p>Objetos</p>
                          </a>
                        </li>
              <!-- Valida si tiene permiso para consultar la pantalla del CRUD CATALOGOS -->
            <li class="nav-item">
                  <a href="/Help_Clinic_System/vistas/seguridad/parametros.php" class="nav-link">
                    <p>Parametros</p>
                  </a>
                </li>  
                <li class="nav-item">
                  <a href="/Help_Clinic_System/vistas/seguridad/backup.php" class="nav-link">
                    <p>Backup</p>
                  </a>
                </li>   
                <li class="nav-item">
                  <a href="/Help_Clinic_System/vistas/seguridad/bitacora.php" class="nav-link">
                    <p>Bitacora</p>
                  </a>
                </li>          
              
            </ul>
          </li>
          <!-- Fin Menu catalogo -->  
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
  </aside>
  
            