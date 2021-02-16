<?php
function selected($dato1, $dato2){
    if($dato1 == $dato2) echo "selected";
}

function consultarPorId($tabla, $pk, $id){
    include("../conexion.php");
    return $conexion->query("SELECT * FROM $tabla WHERE $pk='".$id."'")->fetch_array();
}

function selectOpciones($tabla, $campoNombre){
    include("../conexion.php");
    $opcionesQuery = $conexion->query("SELECT * FROM $tabla");
    while ($opciones = $opcionesQuery->fetch_array()) {
?>
        <option value="<?= $opciones[0]; ?>"><?= $opciones[$campoNombre]; ?></option>
<?php 
    }
}