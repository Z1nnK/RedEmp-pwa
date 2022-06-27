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
    <link rel="stylesheet" href="../../css/perfil.css">
    <script src=""></script>
    <title>RedEmp: Perfil</title>
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
 <div id="contenido" >

<div id="navTabs">
 
<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3 " id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >Perfil</a
    >
    
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Documentos</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#ex1-tabs-3"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Horario</a
    >
  </li>
</ul>
<!-- Tabs navs -->
</div>


<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
    
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">@Area</span><span class="text-black-50"><?php echo $_SESSION['usuario'][0]["cargo"]  ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Mi perfil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control"  value="<?php echo $_SESSION['usuario'][0]["nombre"]  ?>" disabled></div>
                    
                    <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="<?php echo $_SESSION['usuario'][0]["apellido"]  ?>" disabled></div>
                    
                    <div class="col-md-9"><label class="labels">Teléfono</label><input type="text" class="form-control"  value="<?php echo $_SESSION['usuario'][0]["telefono"]  ?>" disabled></div>
                    
                    <div class="col-md-12"><label class="labels">Correo</label><input type="text" class="form-control" value="<?php echo $_SESSION['usuario'][0]["correo"]  ?>" disabled></div>
                  </div>
                
             
               
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Modificar contraseña</span></span></div><br>
                <div class="col-md-12"><label class="labels">Contraseña actual</label><input type="text" class="form-control" placeholder="" value=""></div> <br><br>
                <div class="col-md-12"><label class="labels">Contraseña nueva</label><input type="text" class="form-control" placeholder="" value=""></div>
                <div class="col-md-12"><label class="labels">Repetir Contraseña </label><input type="text" class="form-control" placeholder="" value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" id="btnConfirmar" type="button">Confirmar</button></div>
            </div>
         
        </div>
     
    </div>

</div>






  </div>
  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    Tab 2 content
  </div>
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    Tab 3 content
  </div>
</div>
<!-- Tabs content -->













 </div>



    



    <div id="contentFooter">
        <?php include '../componentes/footerUsuario.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>