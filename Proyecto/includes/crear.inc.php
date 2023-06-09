<?php
    include "includes/dbh.inc.php";

    $sap = "";
    $nombre = "";
    $tipo = "";
    $uxc = "";
    $vol = "";
    $precioCaja = "";
    $precioUnidad = "";
    $img = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sap = $_POST["sap"];
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $uxc = $_POST["uxc"];
        $vol = $_POST["vol"];
        $precioCaja = $_POST["precioCaja"];
        $precioUnidad = $_POST["precioUnidad"];
        $img = $_POST["img"];

        do{
            if(empty($sap) || empty($nombre) || empty($tipo) || empty($uxc) || empty($vol)
            || empty($precioCaja) || empty($precioUnidad) || empty($img)){
                $errorMessage="Debe de llenar todos los campos";
                break;
            }

            // insertar producto en la base de datos
            $sql = "INSERT INTO productos (sap, nombre, tipo, uxc, vol, precioCaja, precioUnidad, img)" .
                    "VALUES ('$sap', '$nombre', '$tipo', '$uxc', '$vol', '$precioCaja', '$precioUnidad', '$img')";
            $result = $con->query($sql);

            if(!$result){
                $errorMessage = "Invalid Query: " . $con->error;
                break;
            }

            $sap = "";
            $nombre = "";
            $tipo = "";
            $uxc = "";
            $vol = "";
            $precioCaja = "";
            $precioUnidad = "";
            $img = "";

            $errorMessage = "";

            $successMessage = "Se añadio el producto exitosamente";
            header("location: inventario.php");
            exit();

        }while(false);

    }
?>