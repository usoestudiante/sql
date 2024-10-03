<?php
include 'conexion.php';
//$login=$_POST['usuario'];
//$clave=$_POST['password'];

$login="lperez";
$clave="prueba05";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE login=? AND clave=?");
$sentencia->bind_param('ss',$login,$clave);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>