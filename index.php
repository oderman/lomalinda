<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jhon Oderman">
    <meta name="generator" content="">
    <title>Sistema Corvus | Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="autentico.php">
        <img class="mb-4" src="lomalogo.jpeg" alt="" width="92" height="92">
        <h1 class="h3 mb-3 font-weight-normal">Ingreso al software</h1>
        <label  class="sr-only">Usuario</label>
        <input type="text" name="Usuario" class="form-control" placeholder="Usuario" required autofocus>
        <label class="sr-only">Contraseña</label>
        <input type="password" name="Clave" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

</body>

</html>