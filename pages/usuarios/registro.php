<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- IMPORT CSS BOOSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
  <!-- IMPORT JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- IMPORT CUSTOM CSS -->
  <link rel="stylesheet" href="../../css/registro.css">
  <script src="../../js/pages/registro.js"></script>
  <title>Perfil</title>
  <?php
  session_start();
  ?>
  <?php
  if ($_SESSION["usuario"]) {
  } else {
    session_destroy();
    header('location: ../../index.php');
  }





  ?>
</head>

<body>




  <form>
    <div class="card">

      <div class="card-body">
        <h5 class="card-title">Completa tu perfil</h5>
        <br>
        <label for="basic-url" class="form-label">Empresa</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input id="iEmpresa" type="text" class="form-control" readonly placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <br>

        <label for="basic-url" class="form-label">Mis datos</label>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">RUT</span>
          <input id="iRut" type="text" class="form-control" readonly placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div id="popNombre" class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input id="iNombre" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div id="popApellido" class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Apellido</span>
          <input id="iApellido" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div id="popTelefono" class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Teléfono</span>
          <input id="iTelefono" type="cellphone" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div id="popNombre" class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Correo</span>
          <input id="iCorreo" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>







        <br>
        <label for="basic-url" class="form-label">Contraseña</label>
        <div class="input-group mb-3">

          <input id="iPass1" type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <label for="basic-url" class="form-label">Confirmar contraseña</label>
        <div class="input-group mb-3">

          <input id="iPass2" type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div id="contentBtn">

          <a id="btnListo" class="btn btn-primary">Listo</a>
          <a id="btnDescartar" class="btn btn-primary">Descartar</a>
        </div>






      </div>
    </div>

  </form>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>