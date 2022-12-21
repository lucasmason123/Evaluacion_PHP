<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);

mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"' );

//si tenemos un posible error en la conexion lo mostramos de la siguente manera
if (mysqli_connect_errno()){
    printf("Fallo conexion a la base de datos: %\n", mysqli_connect_errno());
    exit();
}

if(!function_exists('ejecutarConsulta')){
    function ejecutarConsulta($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function ejecutarConsultaSimpleFila($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function ejecutarConsulta_retornarID($sql)
    {
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }
}