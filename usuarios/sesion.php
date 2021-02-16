<?php
session_start();
if ($_SESSION["id"] == "")
	header("Location:../salir.php");
else {

	include("../conexion.php");
	#$config = mysql_fetch_array(mysql_query("SELECT * FROM configuracion WHERE conf_id=1",$conexion));

	//USUARIO ACTUAL
	$consultaUsuarioActual = $conexion->query("SELECT * FROM usuarios WHERE usr_id='" . $_SESSION["id"] . "'");
	$numUsuarioActual = $consultaUsuarioActual->num_rows;
	$datosUsuarioActual = $consultaUsuarioActual->fetch_array();
	//SABER SI ESTA BLOQUEADO
	/*if ($datosUsuarioActual['usr_bloqueado'] == 1) {
?>
		<span style='font-family:Arial; color:red;'>Su usuario ha sido bloqueado. Por tanto no tiene permisos para acceder al Sistema.</samp>
			<script type="text/javascript">
				function sacar() {
					window.location.href = "../salir.php";
				}
				setInterval('sacar()', 3000);
			</script>
	<?php
		exit();
	}*/
}
	?>