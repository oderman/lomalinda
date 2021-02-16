<?php
include("sesion.php");

$conexion->query("INSERT INTO tinas_salida(tins_tina, tins_cantidad, tins_observacion, tins_usuario)VALUES('".$_POST["tina"]."', '".$_POST["cantidad"]."', '".$_POST["observaciones"]."', '".$_SESSION["id"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="tinas-salida.php?msg=1&id='.$idRegistro.'";</script>';