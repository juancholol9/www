<?php
    include("header.php");
    include("carro.php");
?>

<div class="center container my-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Orden: Hlx983</p>
        <div class="container-fluid p-2">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Imagen</th>
<th scope="col">Cantidad</th>
<th scope="col">Artículo</th>
<th scope="col">Precio</th>
</tr>
</thead>
<tbody>
            <div class="container_card">
<tr>
<th scope="row" style="vertical-align: middle;">0</th>
<td>
                        <img src="img/Champagne Bollinger Special Cuvée Brut.jpg" alt="" width="100px">
            </td>
<td style="vertical-align: middle;">2</td>
<td style="vertical-align: middle;">Champagne Bollinger Special Cuvée Brut</td>
<td style="vertical-align: middle;">200€</td>
</tr>
</tbody>
</table>
                <li class="list-group-item d-flex justify-content-between">
                <span  style="text-align: left; color: #000000;"><strong>Total (EUR)</strong></span>
                200€
                </li>
                <li class="list-group-item d-flex justify-content-between">
                <span  style="text-align: left; color: #000000;"><strong>I.V.A. (EUR)</strong></span>
                <span class="grey-text font-weight-bold" style="font-size:14px;">
                3.47€
                </span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                <span  style="text-align: left; color: #000000;"><strong>Total + I.V.A. (EUR)</strong></span>
                <span class="grey-text font-weight-bold" style="font-size:14px;">
                <strong  style="text-align: left; color: #000000;">
                203.47€
                </strong>
                </span>
                </li>
            </div>
        </div>
<br>

<div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="inventario.php" type="image" name="imageField3"class="btn-lg bg-success text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                                title="Remove item"><i class="fas fa-trash-alt"></i> Regresar al inventario
                </a>
            </div>
            <div class="col">
                <a target="_blank" href="pdf/orden_Hlx983.pdf" type="image" name="imageField3"class="btn-lg bg-warning text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                title="Remove item"><i class="fas fa-trash-alt"></i> Ver Factura PDF
                </a>
            </div>
        </div>