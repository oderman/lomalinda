<?php
include("../conexion.php");
$conexion->query("INSERT INTO clientes(cli_nombre, cli_email, cli_telefono)VALUES('".$_POST["nombre"]."', '".$_POST["email"]."', '".$_POST["telefono"]."')");
#if ($conexion->mysqli_errno) {echo "Fallo: (" . $conexion->mysqli_errno . ") " . $conexion->mysqli_error; exit();}

echo '<script type="text/javascript">window.location.href="clientes.php?msg=1";</script>';