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
    <link rel="stylesheet" href="../../css/organigrama.css">
    <script src=""></script>
    <title>RedEmp: Organigrama</title>
    <?php
session_start();
?>
<?php
if ($_SESSION["usuario"]) {
    
}else{
    session_destroy();
    header('location: ../../index.php');
}
if ($_SESSION["usuario"][0]["estado_cuenta"]==0) {
    header('location: registro.php');
}




?>
</head>

<body>
    <div id="contentNav">
        <?php include '../componentes/navbar.php'; ?>
    </div>
<div id="contenido">

<h3 id="tituloAsistencia">Org. institucional</h3>
    <div class="container text-center">
  <div class="row">
    <div class="col-12">Parent</div>
  </div>
  <div class="row">
    <div class="col-6 right-line"></div>
    <div class="col-6"></div>
  </div>
  <div class="row">
    <div class="col-3 right-line"></div>
    <div class="col-3 right-line top-line"></div>
    <div class="col-3 right-line top-line"></div>
    <div class="col-3"></div>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">Child</div>
    <div class="col-4">Bigger Child</div>
    <div class="col-2">Child</div>
    <div class="col-2"></div>
  </div>
  <div class="row">
    <div class="col-6 right-line"></div>
    <div class="col-6"></div>
  </div>
  <div class="row">
    <div class="col-3 p-0">
      <div class="halved right-line"></div>
      <div class="halved top-line"></div>
    </div>
    <div class="col-3 p-0">
      <div class="halved right-line top-line"></div>
      <div class="halved top-line"></div>
    </div>
    <div class="col-3 p-0">
      <div class="halved right-line top-line"></div>
      <div class="halved top-line"></div>
    </div>
    <div class="col-3 p-0">
      <div class="halved right-line top-line"></div>
      <div class="halved"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-3">GrandChild</div>
    <div class="col-3">GrandChild</div>
    <div class="col-3">GrandChild</div>
    <div class="col-3">GrandChild</div>
  </div>
</div>


</div>



    <div id="contentFooter">
        <?php include '../componentes/footerUsuario.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>