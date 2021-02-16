<?php
include("sesion.php");

$conexion->query("INSERT INTO tinas(tin_nombre)VALUES('".$_POST["tina"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="tinas.php?msg=1&id='.$idRegistro.'";</script>';