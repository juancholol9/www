<?php
    include "header.php";
    include "includes/dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Inventario</h2>
        <a class="btn btn-primary" href="crear.php">Agregar Nuevo Producto</a>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>SAP</th>
                    <th>Nombre</th>
                    <!-- <th data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content = "<img src='img/Cinzano Gran Dolce.jpeg' height='200px'>" >Hola</th> -->
                    <th>Tipo</th>
                    <th>UXC</th>
                    <th>Vol</th>
                    <th>Precio Caja</th>
                    <th>Precio Unidad</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM productos";
                $result = $con->query($sql);
                if(!$result){
                    die("Invalid query: ". $con->error);
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td><img src='img/$row[img]' width='100px'></td>
                        <td class='align-middle'>$row[sap]</td>
                        <th class='align-middle'>$row[nombre]</td>
                        <td class='align-middle'>$row[tipo]</td>
                        <td class='align-middle'>$row[uxc]</td>
                        <td class='align-middle'>$row[vol]</td>
                        <td class='align-middle'>$row[precioCaja]</td>
                        <td class='align-middle'>$row[precioUnidad]</td>
                        <td class='text-center align-middle'>
                            <a class='btn btn-primary btn-sm' href='editar.php?id=$row[id]'>Editar</a>
                            <a class='btn btn-danger btn-sm' href='eliminar.php?id=$row[id]'>Eliminar</a>
                            <a class='btn btn-warning btn-sm' href='agregarCarro.php?id=$row[id]'>Agregar al Carro</a>
                        </td>
                    </tr>";
                }
            ?>
            </tbody>
        </table>

    </div>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>

</body>
</html>