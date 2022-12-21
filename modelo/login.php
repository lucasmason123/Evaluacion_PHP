<?php
require '../config/Conexion.php';

//iniciar la sesion
session_start();

//$conex = new Conexion(); //Creamos la instancia para conectarnos con la clase

//$conexion = $conex->Conectar();

//print_r($conexion); //imprimimos el resultado

//Recibimos los datos  que son enviados  mediante POST del arcivo ajax "parametros.js"

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

//Encirptacion de  la password a MD5, la idea es compararla con la DB

$password = md5($password);

//Creamos la consulta  y la ejecutamos a la DB entregandole los parametros recibidos  desde la vista
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$result = $conexion->query($sql);

if($result->num_rows >= 1){
    //Creamos las varialbes de sesion
    $_SESSION["s_usuario"] = $usuario;
}else{
    //Si no encuentra nada debera devolver un null
    $_SESSION["s_usuario"] = null;
    $data = null;
}
print json_encode($data);
$conexion = null;

?>