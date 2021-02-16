<?php if(isset($_GET["msg"]) and $_GET["msg"]==1){?>
    <div class="alert alert-success" role="alert">
    Su registro fue creado correctamente.
    </div>
<?php }?>



<!-- ERRORES -->
<?php if(isset($_GET["error"]) and $_GET["error"]==1){?>
    <div class="alert alert-danger" role="alert">
    Hubo un error al detectar la Institución a la que aspira el estudiante. Intente nuevamente.
    </div>
<?php }?>

<?php if(isset($_GET["error"]) and $_GET["error"]==2){?>
    <div class="alert alert-danger" role="alert">
        <p>Ya existe una solicitud con este número de documento <b><?=$_GET["documento"];?></b>. Por favor intente consultar el estado de la solicitud para verificar el paso a seguir.</p>
        <p><a href="#" class="btn btn-primary">Consultar estado de solicitud</a></p>
    </div>
<?php }?>