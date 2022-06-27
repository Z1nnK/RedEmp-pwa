<!doctype html>
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
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <title>RedEmp: Planes</title>
    <?php
session_start();
?>
<?php
if (isset($_SESSION['usuario'])) {
    header('location: /pages/usuarios/inicio.php');
}
?>
</head>

<body>

    <!-- header -->
    <div id="navContainer">
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><label id="inicioTitulo">Inicio</label></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <!-- PENDIENTE -->
                            <a class="nav-link active" aria-current="page" href="#">@link informacion</a>
                        </li>
                        <li class="nav-item">
                            <!-- PENDIENTE -->
                            <a class="nav-link" href="#">@link informacion</a>
                        </li>


                    </ul>
                    <button type="button" id="btnModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Iniciar sesión
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">

                    <form style="text-align: center;">

                        <h1 class="h3 mb-3 fw-normal">Credenciales</h1>

                        <div class="form-floating">
                            <input type="number" id="iUsuario" class="form-control" id="floatingInput" placeholder="Usuario">
                            <label for="floatingInput">RUT</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" id="iContrasenia" class="form-control" id="floatingPassword" placeholder="Contraseña">
                            <label for="floatingPassword">Contraseña</label>
                        </div>

                        <div class="checkbox mb-3" style="text-align: start;">
                            <label>
                                <input type="checkbox" value="remember-me"> Recordar
                            </label>
                        </div>
                        <a type="button" id="btnLogin" class="btn btn-primary">Ingresar</a>

                    </form>
                    </main>

                </div>

            </div>
        </div>
    </div>


    <!-- PENDIENTE AGREGAR IMAGENES Y CAMBIAR TEXTO -->
    <!-- Begin page content -->
    <div id="contenido">

        <link rel="stylesheet" href="../css/precios.css">
        <div class="container py-2">
            <header>

                <!-- PENDIENTE MODIFICAR PRECIOS E INFORMACION -->
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Planes</h1>
                    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
                </div>
            </header>

            <main>
                <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 users included</li>
                                    <li>2 GB of storage</li>
                                    <li>Email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-90 btn btn-lg btn-outline-primary">Sign up for free</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>20 users included</li>
                                    <li>10 GB of storage</li>
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-90 btn btn-lg btn-primary">Get started</button>
                            </div>
                        </div>
                    </div>

                </div>




            </main>






        </div>


    </div>


  
    <!-- IMPORT FOOTER -->
    <div id="contentFooter">
        <?php include 'pages/componentes/footer.php'; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>