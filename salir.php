<?php
session_start();
include("conexion.php");
$conexion->query("UPDATE usuarios SET usr_sesion=0, usr_ultima_salida=now() WHERE usr_id='".$_SESSION["id"]."'");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
session_destroy();
header("Location:index.php?s=11");
?>