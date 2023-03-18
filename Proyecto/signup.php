<?php
    include "header.php";
?>

<section>
    <div class="container mt-4">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <div class="mb-3">
                <input class="form-control" type="text" name="name"  placeholder="Nombre Completo">
            </div>

            <div class="mb-3">
                <input class="form-control" type="text" name="email"  placeholder="Email">
            </div>

            <div class="mb-3">
                <input class="form-control" type="text" name="uid"  placeholder="Usuario">
            </div>

            <div class="mb-3">
            <input class="form-control" type="password" name="pwd"  placeholder="Contrasena">
            </div>

            <div class="mb-3">
                <input class="form-control" type="password" name="pwdRepeat"  placeholder="Repita la Contrasena">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyImput"){
                echo "<h2 class='text-center'>Llene todos los espacios</h2>";
            }else if($_GET["error"] == "invalidUid"){
                echo "<h2 class='text-center'>Usuario Invalido</h2>";
            }else if($_GET["error"] == "invalidEmail"){
                echo "<h2 class='text-center'>Correo Invalido</h2>";
            }else if($_GET["error"] == "passworddontmatch"){
                echo "<h2 class='text-center'>Las contraseñas no son iguales</h2>";
            }else if($_GET["error"] == "stmsfailed"){
                echo "<h2 class='text-center'>Intente de nuevo</h2>";
            }else if($_GET["error"] == "usernametaken"){
                echo "<h2 class='text-center'>Usuario no disponible</h2>";
            }else if($_GET["error"] == "none"){
                echo "<h2 class='text-center'>Se ha registrado</h2>";
            }
        }
    ?>
</section>

