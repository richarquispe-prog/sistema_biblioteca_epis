<?php

    $hostname = "localhost";//EL NOMBRE DE SERVIDOR 
    $user = "root";//NOMBRE DE USUARIO QUE SE REGISTRO EN  MYSQL 
    $pass = ""; // PASSWORD DEL USUARIO DE MYSQL 
    $database = "bibliotecaepis"; //NOMBRE LA BASE DE DATO 
//realizando la conexion pasamos los varibles en la funcion de mysql_connect
    $conexion = mysqli_connect($hostname,$user,$pass,$database);
    //Revisa si la conexion esta bien o hay algun error 
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();//si hay error nos enviara el alet y termina el proceso
    }

    mysqli_select_db($conexion,$database) or die("No se encuentra la base de datos");//si esque ocurre algun error en la bd

    mysqli_set_charset($conexion,"utf8");


    
?>