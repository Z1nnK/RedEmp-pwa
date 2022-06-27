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
    
}else{
    session_destroy();
    header('location: ../../index.php');
}





?>
</head>

<body>

  


<form >
  <div class="card">

    <div class="card-body">
      <h5 class="card-title">Ya casi...</h5>
      <br>
      
      

      <div id="contentBtn">

        <a id="btnListo" class="btn btn-primary">Listo</a>

      </div>
     
     

    </div>
  </div>

  </form>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>