<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Biblioteca EPIS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../../assets/Styles/styles_index.css" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link type="image/x-icon" href="../resources/img/epis1.png" rel="shortcut icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</head>

<body>
    <!-- VENTANA DE INICIO GENERAL -->
<header class="cabecera">
        <div class="cabecera__fondo--nitido"></div>
        <div class="cabecera__capa"></div>
        <div class="cabecera__contenido">
            <img src="../resources/img/epis1.png" alt="Funcion 13 Logo" class="logo">
            <h1>SISTEMA DE BIBLIOTECA</h1>
            <p>Escuela Profesional de Ingenieria de Sistemas</p>
        </div>
        <!--AQUI TENDREMOS DIFERENTES LISTAS DE MENU DE VENTANA DE INICIO-->
        <nav class="nav">
            <div class="nav__columna nav__pull"></div>
            <ul class="nav__columna nav__enlaces">
                <li><a href="#">Inicio</a></li>
                <li><a href="https://goo.gl/maps/YGddP8BJ74DW9uu5A" target="_blank">Ubicación</a></li>
                <li><a href="https://sistemas.unh.edu.pe/" target="_blank">Contactenos</a></li>
                <li class="dropdown" style="color: white">
                    <span>Ingresar
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </span>
                    <ul>
                        <li class="">
                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#estudent"
                                style="color: white" target="_blank">
                                Estudiante
                            </button>

                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#addprofile"
                                style="color: white">
                                Administrador
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    
    <section class="section1-center">
    <br><br><br><br>
        <div class="cont-video-bg" style="position:relative; width: 100%; top: 0; left: 0">
            <video autoplay muted loop id="myVideo" style="min-width: 100%">
                <source src="../resources/img/libros_comprimido(1080)(2).mp4" type="video/mp4">
            </video>

        </div>
    </section>


    <!-- MODAL PARA EL LOGEO DEL ESTUDIANTE-->
    <div class="modal fade" id="estudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="color: black;">
        <div class="modal-dialog">
            <div class="modal-content img_log">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">ESTUDIANTE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <img src="../resources/img/sistemas.png">
                <div class="modal-body">
                    <form method="post" action="../Controller/logestudent.php" class="adm_login" autocomplete="on">

                        <div class=" txt_field">
                            <input name="email" type="email" required class="form-control" id="exampleInputEmail1" pattern=".+@unh.edu.pe" title="Ingrese un correo institucional de la UNH">
                            <span></span>
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
                        </div>

                        <div class="mb-3 txt_field">
                            <input name="password" type="password" required class="form-control"
                                id="exampleInputPassword1">
                            <span></span>
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        </div>

                        <div class="modal-footer contraseña">
                            <input type="submit" value="Login">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA EL LOGEO DEL ADMINISTRADOR -->
    <div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="color: black;">
        <div class="modal-dialog">
            <div class="modal-content img_log">

                <div class="modal-header ">

                    <h5 class="modal-title" id="exampleModalLabel">ADMINISTRADOR </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <img src="../resources/img/sistemas.png">
                <div class="modal-body">
                    <form method="POST" action="../Controller/log_admin.php" class="adm_login" autocomplete="on">

                        <div class=" txt_field">
                            <input name="email_" type="email" required class="form-control" id="exampleInputEmail1" pattern=".+@unh.edu.pe" title="Ingrese un correo institucional de la UNH" >
                            <span></span>
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
                        </div>

                        <div class="mb-3 txt_field">
                            <input name="password_" type="password" required class="form-control"
                                id="exampleInputPassword1">
                            <span></span>
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        </div>

                        <div class="modal-footer contraseña">
                            <input type="submit" value="Login">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

</body>
<!-- PIE DE PAGINA DE INICIO -->
<footer class="pie_pagina">
    <center>
        <p>©Copyright 2050 EQUIPO 4. Todos los derechos reservados.</p>
    </center>
</footer>
<script>
document.querySelector(".dropdown").addEventListener("click",
    function() {
        document.querySelector("dropdown ul").classList.add("show")
    });
</script>

</html>