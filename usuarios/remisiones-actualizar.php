<?php
include("../conexion.php");
$conexion->query("INSERT INTO remisiones(rem_fecha, rem_cliente, rem_equipo, rem_referencia, rem_estado, rem_marca)VALUES(now(), '".$_POST["cliente"]."', '".$_POST["equipo"]."', '".$_POST["ref"]."', 1, '".$_POST["marca"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="remisiones-editar.php?msg=1&id='.$idRegistro.'";</script>';