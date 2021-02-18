<?php
include("head.php");
include("funciones.php");

$consulta1 = $conexion->query("SELECT * FROM usuarios
WHERE usr_id = '".$_SESSION["id"]."'
");
$res1 = $consulta1->fetch_array();


?>


</head>

<body>
    <?php include("menu.php"); ?>

    <div class="container">

    
        <h2 class="mt-4 mb-4">Nuevo registro</h2>


        <div class="row justify-content-md-center">
            <div class="col col-lg-12">

                <?php include("alertas.php"); ?>

                <form action="mi-perfil-actualizar.php" method="post" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label> Usuario </label>
                            <input type="text" class="form-control" name="usuario" value="<?php  echo $res1["usr_usuario"];?>" >
                            
                        </div>

                

                        <div class="form-group col-md-4">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php  echo $res1["usr_nombre"];?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label> Email </label>
                            <input type="text" class="form-control" name="email" value="<?php  echo $res1["usr_email"];?>">
                            
                        </div>
                   </div>

                              
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Actualizar </button>

                </form>

            </div>


        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>