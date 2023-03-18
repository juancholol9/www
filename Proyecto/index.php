<?php
    include "header.php";
?>

<section>
    <div class="container mt-4">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <div class="mb-3">
                <input class="form-control" type="text" name="uid"  placeholder="Usuario/Correo">
            </div>

            <div class="mb-3">
                <input class="form-control" type="password" name="pwd"  placeholder="Contraseña">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="submit">Log In</button>
            </div>
        </form>
    </div>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyImput"){
                echo "<h2 class='text-center'>Llene todos los espacios</h2>";
            }else if($_GET["error"] == "wronglogin"){
                echo "<h2 class='text-center'>Informacion Incorrecta</h2>";
            }
        }
    ?>
</section>