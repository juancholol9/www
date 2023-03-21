<?php
    include("header.php");
    include("carro.php");
?>

<!-- vista E -->
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Portes de envio</p>
        <div class="container-fluid p-2">
            <div class="container_card">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../Carrito de compra paso 1/img/portes.jpg" alt="Man">
                        <a target="_blank" class="category">
                        20€
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />
                        <input name="precio" type="hidden" id="precio" value="20" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Empresa 001" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">Empresa 001</h5>
                        <p>24h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../Carrito de compra paso 1/img/portes.jpg" alt="Man">
                        <a target="_blank" class="category">
                        10€
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Empresa 002" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">Empresa 002</h5>
                        <p>48h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                        <div class="blog-post ">
                        <img src="../Carrito de compra paso 1/img/portes.jpg" alt="Man">
                        <a target="_blank" class="category">
                        GRATIS
                        </a>
                        <div class="text-content">
                        <input name="ref" type="hidden" id="ref" value="portes" />
                        <input name="precio" type="hidden" id="precio" value="0" />
                        <input name="titulo" type="hidden" id="titulo" value="Porter de envio: Empresa 003" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <div class="card-body">
                        <h5 class="card-title">Empresa 003</h5>
                        <p>72h.</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Seleccionar envio</button>
                        </div>
                        </div>
                        </div>
                        </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>








