<?php
include("head.php");
include("funciones.php");

$datos = consultarPorId("remisiones", "rem_id", $_GET["id"]);
?>
</head>

<body>
    <?php include("menu.php"); ?>

    <div class="container">

        <h2 class="mt-4 mb-4">Editar registro</h2>


        <div class="row justify-content-md-center">
            <div class="col col-lg-12">

                <?php include("alertas.php"); ?>

                <form action="remisiones-guardar.php" method="post">

                    <p class="lead text-danger">
                        (*) Algunos campos de este formulario son obligatorios.
                    </p>

                    <h4>Datos del cliente</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Cliente <span style="color:red;">(*)</span></label>
                            <select name="cliente" class="form-control" required>
                                <option value="" selected>Escoja una opción...</option>
                                <?php
                                $clientes = $conexion->query("SELECT * FROM clientes");
                                while ($cli = $clientes->fetch_array()) {
                                ?>
                                    <option value="<?= $cli['cli_id']; ?>" <?php selected($datos['rem_cliente'], $cli['cli_id']);?>><?= $cli['cli_nombre']; ?></option>
                                <?php }?>
                            </select>
                        </div>


                    </div>

                    <h4>Datos del equipo</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Tipo de equipo</label>
                            <input type="text" class="form-control" name="equipo" value="<?=$datos['rem_equipo'];?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Referencia</label>
                            <input type="text" class="form-control" name="ref" value="<?=$datos['rem_referencia'];?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Marca</label>
                            <select name="marca" class="form-control" required>
                                <option value="" selected>Escoja una opción...</option>
                                <?php
                                $marcas = $conexion->query("SELECT * FROM marcas");
                                while ($marca = $marcas->fetch_array()) {
                                ?>
                                    <option value="<?= $marca['mar_id']; ?>" <?php selected($datos['rem_marca'], $marca['mar_id']);?>><?= $marca['mar_nombre']; ?></option>
                                <?php }?>
                            </select>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Serial</label>
                            <input type="text" class="form-control" name="serial" value="<?=$datos['rem_serial'];?>">
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>Detalles</label>
                            <textarea class="form-control" rows="3" name="detalles"><?=$datos['rem_detalles'];?></textarea>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>Observaciones de entrada</label>
                            <textarea class="form-control" rows="3" name="obsEntrada"><?=$datos['rem_descripcion'];?></textarea>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label>Observaciones de salida</label>
                            <textarea class="form-control" rows="3" name="obsSalida"><?=$datos['rem_observacion_salida'];?></textarea>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Guardar</button>

                </form>

            </div>


        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>