<?php
    include "includes/dbh.inc.php";
    include "nav_cart.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <div class="container-fluid">
                <!-- <button class="navbar-toggler"type="button"
                    data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if(isset($_SESSION["usuarioUid"])){ ?>
                                <li class='nav-item active'>
                                        <a class='nav-link' aria-current='page' href='inventario.php'>Inventario</a>
                                </li>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red; cursor:pointer;"><i class="fas fa-shopping-cart"></i>Pedir Productos <?php echo $totalcantidad; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <li class='nav-item'>
                                        <a class='nav-link' href='includes/logout.inc.php'>Cerrar Sesion</a>
                                </li>
                        <?php }else{ ?>
                                <li class='nav-item'>
                                        <a class='nav-link' href='signup.php'>Registrarse</a>
                                    </li>
                                <li class='nav-item'>
                                        <a class='nav-link' href='index.php'>Iniciar Sesion</a>
                                    </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>