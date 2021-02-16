<?php
include("sesion.php");
$conexion->query("INSERT INTO usuarios(usr_usuario, usr_clave, usr_tipo, usr_nombre, usr_email, usr_estado)VALUES('".$_POST["usuario"]."', SHA1('".$_POST["clave"]."'), '".$_POST["tipo"]."', '".$_POST["nombre"]."', '".$_POST["email"]."', 1)");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="usuarios.php?msg=1";</script>';