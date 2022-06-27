<!-- Boostrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
<script src="../../js/pages/cerrarSesion.js"></script>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px 1px 15px -6px black;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="../usuarios/inicio.php">
        <img
          src=""
          height="15"
          alt="RedEmp logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="../usuarios/area.php">Área</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../usuarios/turno.php">Turno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../usuarios/asistencia.php">Asistencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../usuarios/organigrama.php">Organigrama</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
      <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">3</span>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        <i class="bi bi-chat-fill"></i>
        <span class="badge rounded-pill badge-notification bg-danger">3</span>
          
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Agregar mensaje</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Agregar mensaje</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Agregar mensaje</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src=""
            class="rounded-circle"
            height="25"
            alt="foto usuario"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">Mis documentos</a>
          </li>
          <li>
            <a class="dropdown-item" href="../usuarios/perfil.php">Perfil</a>
          </li>
          <li>
            <a class="dropdown-item" id="btnCerrarSesion" >Salir</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
