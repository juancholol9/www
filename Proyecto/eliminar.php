<?php
    include "includes/dbh.inc.php";

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $sql = "DELETE FROM productos WHERE id=$id";
    $con->query($sql);

    header("location: inventario.php");
    exit();
?>