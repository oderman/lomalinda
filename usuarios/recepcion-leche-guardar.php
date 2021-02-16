<?php
include("sesion.php");

if ($_FILES['foto']['name'] != "") {
	$destino = "../assets/imagenes";
	$extension = end(explode(".", $_FILES['foto']['name']));
	$foto = uniqid('img_') . "." . $extension;
	@unlink($destino . "/" . $foto);
	move_uploaded_file($_FILES['foto']['tmp_name'], $destino . "/" . $foto);
}

$conexion->query("INSERT INTO recibo_leche(reci_camion, reci_litros, reci_foto, reci_usuario)VALUES('".$_POST["camion"]."', '".$_POST["litros"]."', '". $foto ."', '".$_SESSION["id"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;

echo '<script type="text/javascript">window.location.href="recepcion-leche.php?msg=1&id='.$idRegistro.'";</script>';