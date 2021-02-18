<?php
include("sesion.php");

$conexion->query("UPDATE usuarios SET usr_usuario='".$_POST['usuario']."', usr_nombre='".$_POST['nombre']."', usr_email='".$_POST['email']."'
WHERE usr_id = '".$_SESSION["id"]."'
");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}


echo '<script type="text/javascript">window.location.href="mi-perfil.php?msg=2";</script>';