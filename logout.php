<?php 
    //Limpiamos  las variables de sesion
session_unset();
//Destruimos la sesion
session_destroy();
//Redireccionamos al login
header("Location: index.php");
?>