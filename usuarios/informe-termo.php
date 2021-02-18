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

                <form action="informe-termo-generar.php" method="post" target="_blank">



                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Escoge el año</label>
                            <input type="text" class="form-control" name="agno">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Escoge el mes</label>
                            <input type="text" class="form-control" name="mes">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Escoge el día</label>
                            <input type="text" class="form-control" name="dia">
                        </div>

                    

                    </div>



                    <button type="submit" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Generar Informe</button>

                </form>

            </div>


        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>