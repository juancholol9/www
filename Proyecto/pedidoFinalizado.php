<?php
    include ("header.php");
?>

<div class="container my-5 text-center">
    <h1>El pedido ha sido realizado</h1>
    <br>
    <br>
    <br>
    <h4>El proveedor sera notificado en la siguente hora sobre su pedido</h4>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <a href="inventario.php" type="image" name="imageField3"class="btn-lg bg-success text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                    title="Remove item"><i class="fas fa-trash-alt"></i> Volver al inventario
                </a>
            </div>
            <div class="col">
            <a href="ordenes.php" type="image" name="imageField3"class="btn-lg bg-warning text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                    title="Remove item"><i class="fas fa-trash-alt"></i> Ver Ordenes
                </a>
            </div>
            <div class="col">
            <a href="includes/logout.inc.php" type="image" name="imageField3"class="btn-lg bg-danger text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                    title="Remove item"><i class="fas fa-trash-alt"></i> Cerrar Sesion
                </a>
            </div>
        </div>
    </div>

</div>