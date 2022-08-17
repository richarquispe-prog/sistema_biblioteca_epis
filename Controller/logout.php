<?php
//Cerra session 
session_start();
//destruye la session
session_destroy();
//lleva o redirege a la  vetana  index 
header("Location: ../View/");

?>