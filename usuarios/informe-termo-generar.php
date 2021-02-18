<?php
include("head.php");
?>

</head>

<body>

<div style="text-align: center;"> <img class="mb-2 mt-4"  src="../lomalogo.jpeg" alt="" width="150" height="150"></div>

    <div class="container">

        <h2 class="mt-4 mb-4">Informe Termo (<?php echo $_POST["dia"] . " " . $_POST["mes"] . " " . $_POST["agno"];  ?>) </h2>

        <?php include("alertas.php"); ?>

        <?php

        $filtro1  = '';
        if($_POST["agno"]!="" and $_POST["mes"]!="" and $_POST["dia"]!=""){
            $filtro1  = "WHERE year(reci_fecha)='" . $_POST["agno"] . "' AND month(reci_fecha)='" . $_POST["mes"] . "' AND day(reci_fecha)='" . $_POST["dia"] . "'";  
        }

        $filtro2  = '';
        if($_POST["agno"]!="" and $_POST["mes"]!="" and $_POST["dia"]!=""){
            $filtro2  = "WHERE year(ting_fecha)='" . $_POST["agno"] . "' AND month(ting_fecha)='" . $_POST["mes"] . "' AND day(ting_fecha)='" . $_POST["dia"] . "'";  
        }




                $consulta1 = $conexion->query("SELECT sum(reci_litros) FROM recibo_leche
                $filtro1
                ");
                $res1 = $consulta1->fetch_array();


                $consulta2 = $conexion->query("SELECT sum(ting_litros) FROM tinas_ingreso
                $filtro2
                ");
                $res2 = $consulta2->fetch_array();

                $termo = $res1[0] - $res2[0];

                ?>



        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Ingreso</th>
                    <th scope="col">Salida</th>
                    <th scope="col">Termo</th>

                </tr>
            </thead>
            <tbody>

                <tr>

                    <td ><?=number_format ($res1[0], 0, ".", "."); ?></td>
                    <td><?= number_format ($res2[0]
                    , 0, ".", "."); ?></td>
                    <td><?= number_format($termo , 0, ".", "."); ?></td>
                    

                </tr>


            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>