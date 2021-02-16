<?php
include("head.php");
?>

</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container">

        <h2 class="mt-4 mb-4">Salida de leche de las tinas</h2>

        <?php include("alertas.php"); ?>

        <div class="container mb-2">
            <a href="tinas-salida-agregar.php" class="btn btn-outline-danger">Nuevo registro</a>

            <form class="form-inline my-2 my-lg-0 float-right">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>



        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tina</th>
                    <th scope="col">Bloques</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = $conexion->query("SELECT * FROM tinas_salida
                INNER JOIN tinas ON tin_id=tins_tina
                INNER JOIN usuarios ON usr_id=tins_usuario
                ");
                $i = 1;
                while ($fila = $consulta->fetch_array()) {
                ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $fila['tin_nombre']; ?></td>
                        <td><?= number_format($fila['tins_cantidad'],0,".","."); ?></td>
                        <td><?= $fila['tins_fecha']; ?></td>
                        <td><?= $fila['usr_nombre']; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Editar</a>
                                    <a class="dropdown-item" href="#">Eliminar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>