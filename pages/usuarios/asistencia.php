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
    <link rel="stylesheet" href="../../css/asistencia.css">
    <script src=""></script>
    <title>RedEmp: Asistencia</title>
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

<h3 id="tituloAsistencia">Asistencia</h3>


<div class="table-responsive-md">
<table class="table">
  
<thead class="table-light">
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Hora entrada</th>
      <th scope="col">Hora salida</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">31-05-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
    <tr>
      <th scope="row">01-06-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
    <tr>
      <th scope="row">02-06-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
    <tr>
      <th scope="row">03-06-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
    <tr>
      <th scope="row">04-06-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
    <tr>
      <th scope="row">05-06-2022</th>
      <td>07:00</td>
      <td>19:00</td>
    </tr>
  </tbody>
</table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>






































</div>







    <div id="contentFooter">
        <?php include '../componentes/footerUsuario.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>