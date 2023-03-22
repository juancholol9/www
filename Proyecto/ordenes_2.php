<?php
    include("header.php");
    include("carro.php");
?>

<div class="center container my-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Orden: PXx732</p>
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
    <img src="img/Cinzano Gran Dolce.jpeg" alt="" width="100px">
</td>
<td style="vertical-align: middle;">1</td>
<td style="vertical-align: middle;">Cinzano Gran Dolce</td>
<td style="vertical-align: middle;">200€</td>
</tr>
<tr>
<th scope="row" style="vertical-align: middle;">1</th>
<td>
    <img src="img/Champagne Bollinger Special Cuvée Brut.jpg" alt="" width="100px">
</td>
<td style="vertical-align: middle;">3</td>
<td style="vertical-align: middle;">Champagne Bollinger Special Cuvée Brut</td>
<td style="vertical-align: middle;">300€</td>
</tr>
</tbody>
</table>
                <li class="list-group-item d-flex justify-content-between">
                <span  style="text-align: left; color: #000000;"><strong>Total (EUR)</strong></span>
                500€
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
                503.47€
                </strong>
                </span>
                </li>
            </div>
        </div>
<br>
        <a href="inventario.php" type="image" name="imageField3"class="btn-lg bg-success text-white " style="border:0px;" data-toggle="tooltip" data-placement="top"
                title="Remove item"><i class="fas fa-trash-alt"></i> Regresar al inventario
</a>