<?php
//Conexion con el Servidor
$conexion = new mysqli("localhost","root","1234", "lomalinda");
if ($conexion->connect_errno) {echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}

$estadosRemision = array(1=>'Entrada', 2=>'Salida');
$etiquetaEstadoRemision = array(1=>'warning', 2=>'success');
?>