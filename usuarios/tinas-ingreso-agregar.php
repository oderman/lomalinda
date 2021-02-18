<?php
include("head.php");
include("funciones.php");
?>
</head>

<body>
    <?php include("menu.php"); ?>

    <div class="container">

        <h2 class="mt-4 mb-4">Nuevo registro</h2>


        <div class="row justify-content-md-center">
            <div class="col col-lg-12">

                <?php include("alertas.php"); ?>

                <form action="tinas-ingreso-guardar.php" method="post" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Tina <span style="color:red;">(*)</span></label>
                            <select name="tina" class="form-control" required>
                                <option value="" selected>Escoja una opción...</option>
                                <?php selectOpciones("tinas", "tin_nombre"); ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Camión <span style="color:red;">(*)</span></label>
                            <select name="camion[]" class="form-control" required multiple>
                                <option value="" selected>Escoja una opción...</option>
                                <?php selectOpciones("camiones", "cam_nombre"); ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Tipo de Producto <span style="color:red;">(*)</span></label>
                            <select name="tipo" class="form-control" required>
                                <option value="" selected>Escoja una opción...</option>
                                <?php selectOpciones("tipos_productos", "tip_nombre"); ?>
                            </select>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Litros de leche</label>
                            <input type="text" class="form-control" name="litros">
                        </div>

                        <div class="form-group col-md-8">
                            <label>Observaciones</label>
                            <input type="text" class="form-control" name="observaciones">
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