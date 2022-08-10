    
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MENÚ ADMINISTRADOR</title>
	
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
     <link type="image/x-icon" href="../../resources/img/admin.png" rel="shortcut icon">
     <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css"/>
    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div>  
                <img src="../../resources/img/epis1.png" width="50" height="50">
                <div class="sidebar-brand-text mx-1">BIBLIOTECA EPIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">
            <!-- S  -->
            <li class="nav-item">

            	<a href="../libros/acervo.php" class="nav-link"><img src="../../resources/img/libro.png" width="20" height="20">  LIBRO </a>
            	<a href="../boletas/boletas_admi.php" class="nav-link"><img src="../../resources/img/boletaadmi.png" width="20" height="20">  BOLETAS</a>
            	<a href="../usuarios/lista_usuario.php" class="nav-link"><img src="../../resources/img/usuario.png" width="20" height="20">  USUARIOS</a>
                <a href="../Reportes/reportes.php" class="nav-link" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                 REPORTES</a>
            	<!-- <a href="es_registro.php" class="nav-link"><img src="../../resources/img/registrarusuario.png" width="20" height="20">REGISTRAR USUARIO</a> -->
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-2">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" ></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
        	<div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-red bg-white topbar mb-4 static-top shadow">

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-black ">      
                                 
                            <?php
                            //print_r($_SESSION['user']);
                            echo $_SESSION['user']['nombre']." ".$_SESSION['user']['apellidos']." - ";
                            echo $_SESSION['user']['tipo_usuario'];
                                                       
                            ?>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    
                        <div class="topbar-divider d-none d-sm-block">
                            
                        </div>
                        <!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                        
                        	<a href="../../Controller/logout.php" class="nav-link">Salir</a>
                        </li>
                    </ul>
                </nav>
            
	
	
