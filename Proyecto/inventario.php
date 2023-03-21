<?php
    include "header.php";
    include "carro.php";
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
                    <th class='text-center'>Sap</th>
                    <th class='text-center'>Nombre</th>
                    <th class='text-center'>Tipo</th>
                    <th class='text-center'>UXC</th>
                    <th class='text-center'>Vol</th>
                    <th class='text-center'>Precio Caja</th>
                    <th class='text-center'>Precio Unidad</th>
                    <th class='text-center'>Acciones</th>
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
                    <form id='formulario' name='formulario' method='post'>

                        <tr>
                            <td class='text-center align-middle'><img src='img/$row[img]' height='100px'></td>
                            <td class='text-center align-middle'>$row[sap]</td>
                            <td class='text-center align-middle'>$row[nombre]</td>
                            <td class='text-center align-middle'>$row[tipo]</td>
                            <td class='text-center align-middle'>$row[uxc]</td>
                            <td class='text-center align-middle'>$row[vol]</td>
                            <td class='text-center align-middle'>$row[precioCaja]</td>
                            <td class='text-center align-middle'>$row[precioUnidad]</td>
                            <td class='text-center align-middle'>
                                <a class='btn btn-primary btn-sm' href='editar.php?id=$row[id]'>Editar</a>
                                <a class='btn btn-danger btn-sm' href='eliminar.php?id=$row[id]'>Eliminar</a>
                                <button type='submit' class='btn btn-warning btn-sm'>Agregar al Carro</button>
                            </td>
                        </tr>

                        <input name='img' type='hidden' id='img' value='$row[img]'/>
                        <input name='sap' type='hidden' id='sap' value='$row[sap]'/>
                        <input name='nombre' type='hidden' id='nombre' value='$row[nombre]' />
                        <input name='tipo' type='hidden' id='tipo' value='$row[tipo]' />
                        <input name='uxc' type='hidden' id='uxc' value='$row[uxc]' />
                        <input name='vol' type='hidden' id='vol' value='$row[vol]' />
                        <input name='precioCaja' type='hidden' id='precioCaja' value=$row[precioCaja] />
                        <input name='precioUnidad' type='hidden' id='precioUnidad' value=$row[precioUnidad]/>
                        <input name='cantidad' type='hidden' id='cantidad' value='1' class='pl-2' />

                    </form>";
                }
            ?>
            <!-- </tbody> -->
        </table>
    </div>

<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="modal-body">
                        <div>
                            <div class="p-2">
                                <ul class="list-group mb-3">
                                    <?php
                                    if(isset($_SESSION['carrito'])){
                                        $total=0;
                                        for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                            if(isset($carrito_mio[$i])){
                                                if($carrito_mio[$i]!=NULL){
                                                ?>
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div class="row col-12" >
                                                        <div class="col-6 p-0" style="text-align: left; color: #000000;">
                                                        <h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['nombre']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
                                                        </div>
                                                        <div class="col-6 p-0"  style="text-align: right; color: #000000;" >
                                                        <span class="text-muted"  style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precioCaja'] * $carrito_mio[$i]['cantidad'];    ?> €</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                                $total=$total + ($carrito_mio[$i]['precioCaja'] * $carrito_mio[$i]['cantidad']);
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                    <span  style="text-align: left; color: #000000;">Total (EUR)</span>
                                    <strong  style="text-align: left; color: #000000;"><?php

                                    if(isset($_SESSION['carrito'])){
                                        $total=0;
                                        for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                            if(isset($carrito_mio[$i])){
                                                if($carrito_mio[$i]!=NULL){
                                                $total=$total + ($carrito_mio[$i]['precioCaja'] * $carrito_mio[$i]['cantidad']);
                                                }
                                            }
                                        }
                                    }

                                    if(!isset($total)){$total = '0';}else{ $total = $total;}
                                    echo $total; ?> €</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
                <a type="button" class="btn btn-success" href="index2.php">Continuar pedido</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>