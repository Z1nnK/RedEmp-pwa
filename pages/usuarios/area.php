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
    <link rel="stylesheet" href="">
    <script src=""></script>
    <title>RedEmp: Área</title>
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

<!------------------------------------------------------------------------------------------------------------------- -->
<div class="m-5">
  <div id="cardArea" class="col-md-6 offset-md-3  opacity-100 ">
    <div class="col">
      <div class="card h-100">
        <table class="table align-middle">
          <!-- color de encabezado de tabla -->
          <thead class="table-dark text-center">
            <h1 class="text-center">Areas</h1>
            <tr>
              <th scope="col">Nombre Area</th>            
            </tr>
          </thead>

          <tbody>
   
            <tr class="text-center">           
            <td>@Ejemplo@
            <!-- botones de modificar y eliminar area --> 
            <button type="button" class="btn btn-dark btn-sm px-3" data-ripple-color="dark">
            <!-- icono -->
            <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="btn btn-danger btn-sm px-3" data-ripple-color="dark">
            <!-- icono --> 
            <i class="fas fa-trash-alt"></i>
            </button>
            </td>
            </tr>

            <tr class="text-center">
            <td>@Ejemplo@ 
            <!-- botones de modificar y eliminar area --> 
            <button type="button" class="btn btn-dark btn-sm px-3" data-ripple-color="dark">
            <!-- icono -->
            <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="btn btn-danger btn-sm px-3" data-ripple-color="dark">
            <!-- icono -->
            <i class="fas fa-trash-alt"></i>
            </button>
            </td>           
            </tr>

            <tr class="text-center">
            <td>@Ejemplo@
            <!-- botones de modificar y eliminar area -->
            <button type="button" class="btn btn-dark btn-sm px-3" data-ripple-color="dark">
            <!-- icono -->
            <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="btn btn-danger btn-sm px-3" data-ripple-color="dark">
            <!-- icono -->
            <i class="fas fa-trash-alt"></i>
            </button>
            </td>             
            </tr>
           
          </tbody>
          <button type="button" href="#ENLACE DE BOTON" data-ripple-color= "btn btn-outline-dark " data-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#agregarAreaModal">
          <!-- icono -->
          <i class="fas fa-plus-circle fa-5x "></i>
            </button>         
        </table>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------------- -->







    <div id="contentFooter">
        <?php include '../componentes/footerUsuario.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>