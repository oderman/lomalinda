<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Loma Linda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item "><a class="nav-link" href="index.php">Inicio</a></li>

            <li class="nav-item dropdown float-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administración
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="usuarios.php">Usuarios</a>
                    <a class="dropdown-item" href="camiones.php">Camiones</a>
                    <a class="dropdown-item" href="tinas.php">Tinas</a>
                </div>
            </li>

            <li class="nav-item dropdown float-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Producción
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="recepcion-leche.php">Recepción de leche</a>
                    <a class="dropdown-item" href="tinas-ingreso.php">Repartir leche en tinas</a>
                    <a class="dropdown-item" href="tinas-salida.php">Salida de las tinas</a>
                </div>
            </li>

            <li class="nav-item dropdown float-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bloques en bodega</a>
                </div>
            </li>
            

            <li class="nav-item dropdown float-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mi cuenta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi perfil</a>
                    <a class="dropdown-item" href="#">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../salir.php">Cerra sesión</a>
                </div>
            </li>


            <li class="nav-item dropdown float-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inventario
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Insumos</a>
                </div>
            </li>

            

        </ul>


        <span><?=$datosUsuarioActual['usr_nombre'];?></span>



    </div>
</nav>