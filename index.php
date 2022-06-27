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
    <title>RedEmp: Inicio</title>
  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="manifest" href="./manifest.json">
    <?php
    session_start();
    ?>
    <?php
    if (isset($_SESSION['usuario'])) {
        header('location: /pages/usuarios/inicio.php');
    }
    ?>
</head>

<body background="">

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
                            <input type="text" id="iUsuario" class="form-control" id="floatingInput" placeholder="Usuario">
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

        <main class="flex-shrink-0">
            <div id="contentCarousel">

                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/img.jpg" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/img.jpg" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img.jpg" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
        </main>
        <!-- PENDIENTE AGREGAR DESCRIPCION-->
        <div id="contentFoot">

            <h5>First slide label</h5>
            <p>Some representaaative placeholder content for the first slide.</p>

        </div>
    </div >
    <div id="contentToast">
        <?php include 'pages/componentes/toast.php'; ?>
    
    </div>


    <!-- IMPORT FOOTER -->
    <div id="contentFooter">
        <?php include 'pages/componentes/footer.php'; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>