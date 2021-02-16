<?php
session_start();
include("conexion.php");
$rst_usr = $conexion->query("SELECT * FROM usuarios WHERE usr_usuario='".trim($_POST["Usuario"])."' AND usr_clave=SHA1('".$_POST["Clave"]."')");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}

$num = $rst_usr->num_rows;
$fila = $rst_usr->fetch_array();
if($num>0)
{
	//VERIFICAR SI EL USUARIO ESTÁ BLOQUEADO
	//if($fila[6]==1){header("Location:index.php?error=4");exit();}
	//INICIO SESION
	//session_start();
	$_SESSION["id"] = $fila[0];
	//$_SESSION["idUsuario"] = $fila[0];
	if(!isset($_POST["idseg"]) or !is_numeric($_POST["idseg"])){$url = 'usuarios/';}
	else{$url = 'usuarios/clientes-seguimiento-editar.php?id='.$_POST["idseg"];}
	
	$conexion->query("UPDATE usuarios SET usr_sesion=1, usr_ultimo_ingreso=now() WHERE usr_id='".$fila[0]."'");
	if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
	
	header("Location:".$url);
	exit();
}else{
	header("Location:index.php?error=2&idseg=".$_POST["idseg"]);
	exit();
}
?>