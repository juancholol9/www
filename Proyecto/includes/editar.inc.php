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

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //METODO GET: Muestra los datos de la tabla

        if(!isset($_GET["id"])){
            header("location: inventario.php");
            exit();
        }

        $id = $_GET["id"];

        //Lee la fila del producto seleccionado en la base de datos
        $sql = "SELECT * FROM productos WHERE id=$id";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header("location: inventario.php");
            exit();
        }

        $sap = $row["sap"];
        $nombre = $row["nombre"];
        $tipo = $row["tipo"];
        $uxc = $row["uxc"];
        $vol = $row["vol"];
        $precioCaja = $row["precioCaja"];
        $precioUnidad = $row["precioUnidad"];
        $img = $row["img"];

    }else{
        //METODO POST: Actualiza los datos de la tabla

        $id = $_POST["id"];
        $sap = $_POST["sap"];
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $uxc = $_POST["uxc"];
        $vol = $_POST["vol"];
        $precioCaja = $_POST["precioCaja"];
        $precioUnidad = $_POST["precioUnidad"];
        $img = $_POST["img"];

        do{
            if(empty($id) || empty($sap) || empty($nombre) || empty($tipo) || empty($uxc) || empty($vol)
            || empty($precioCaja) || empty($precioUnidad) || empty($img)){
                $errorMessage="Debe de llenar todos los campos";
                break;
            }

            $sql = "UPDATE productos " .
                    "SET `sap` = '$sap', `nombre` = '$nombre', `tipo` = '$tipo', `uxc` = '$uxc', `vol` = '$vol',
                    `precioCaja` = '$precioCaja', `precioUnidad` = '$precioUnidad', `img` = '$img' " .
                    "WHERE id = $id ";

            $result = $con->query($sql);
            if(!$result){
                $errorMessage = "Invalid Query: " . $con->error;
                break;
            }

            $successMessage = "Se actualizo el producto exitosamente";
            header("location: inventario.php");
            exit();

        }while(false);

    }