<?php
include("sesion.php");

$conexion->query("INSERT INTO camiones(cam_nombre)VALUES('".$_POST["camion"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="camiones.php?msg=1&id='.$idRegistro.'";</script>';