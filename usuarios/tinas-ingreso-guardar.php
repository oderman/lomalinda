<?php
include("sesion.php");

$conexion->query("INSERT INTO tinas_ingreso(ting_tina, ting_litros, ting_usuario, ting_observacion, ting_tipo)VALUES('".$_POST["tina"]."', '".$_POST["litros"]."', '".$_SESSION["id"]."', '".$_POST["observaciones"]."','".$_POST["tipo"]."' )");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}
$idRegistro = $conexion->insert_id;



$num = count($_POST["camion"]);
$i = 0;

while ($i < $num) {
    $conexion->query("INSERT INTO tinas_ingreso_camion(tic_tinas_ingreso, tic_camion)VALUES('" . $idRegistro . "', '" . $_POST["camion"][$i] . "')");
    if ($conexion->connect_errno) {
        echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
    $i++;
}
echo '<script type="text/javascript">window.location.href="tinas-ingreso.php?msg=1&id='.$idRegistro.'";</script>';