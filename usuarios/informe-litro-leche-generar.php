<?php
include("head.php");
?>

</head>

<body>



    <div class="container">

        <h2 class="mt-4 mb-4">Informe Recepción de leche (<?php echo $_POST["dia"]. " ".$_POST["mes"]." ".$_POST["agno"];  ?>) </h2>

        <?php include("alertas.php"); ?>





        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Camión</th>
                    <th scope="col">Litros</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Responsable</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = $conexion->query("SELECT * FROM recibo_leche
                INNER JOIN camiones ON cam_id=reci_camion
                INNER JOIN usuarios ON usr_id=reci_usuario
                WHERE year(reci_fecha)='" . $_POST["agno"] . "' AND month(reci_fecha)='" . $_POST["mes"] . "' AND day(reci_fecha)='" . $_POST["dia"] . "'
                ");
                $i = 1;
                $total = 0;
                while ($fila = $consulta->fetch_array()) {
                    $total += $fila['reci_litros'];
                ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $fila['cam_nombre']; ?></td>
                        <td><?= number_format($fila['reci_litros'], 0, ".", "."); ?></td>
                        <td><?= $fila['reci_fecha']; ?></td>
                        <td><?= $fila['usr_nombre']; ?></td>

                    </tr>
                <?php $i++;
                }

                ?>

                <tr style="font-weight: bold;">
                    <th scope="row"></th>
                    <td> Total: </td>
                    <td><?= number_format($total, 0, ".", "."); ?></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>