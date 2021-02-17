<?php
include("sesion.php");

$conexion->query("INSERT INTO tinas_ingreso(ting_tina, ting_litros, ting_camion, ting_usuario, ting_observacion, ting_tipo)VALUES('".$_POST["tina"]."', '".$_POST["litros"]."', '".$_POST["camion"]."', '".$_SESSION["id"]."', '".$_POST["observaciones"]."','".$_POST["tipo"]."' )");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="tinas-ingreso.php?msg=1&id='.$idRegistro.'";</script>';