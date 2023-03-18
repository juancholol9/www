<?php
    include "includes/dbh.inc.php";
    $id = "";
    $name = "";
    $email = "";
    $phone = "";
    $address = "";

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

        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $address = $row["address"];

    }else{
        //METODO POST: Actualiza los datos de la tabla

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do{
            if(empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)){
                $errorMessage="Debe de llenar todos los campos";
                break;
            }

            $sql = "UPDATE productos " .
                    "SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address' " .
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