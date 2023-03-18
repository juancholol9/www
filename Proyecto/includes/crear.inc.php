<?php
    include "includes/dbh.inc.php";
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        do{
            if(empty($name) || empty($email) || empty($phone) || empty($address)){
                $errorMessage="Debe de llenar todos los campos";
                break;
            }

            // insertar producto en la base de datos
            $sql = "INSERT INTO productos (name, email, phone, address)" .
                    "VALUES ('$name', '$email', '$phone', '$address')";
            $result = $con->query($sql);

            if(!$result){
                $errorMessage = "Invalid Query: " . $con->error;
                break;
            }

            $name = "";
            $email = "";
            $phone = "";
            $address = "";
            $errorMessage = "";

            $successMessage = "Se añadio el producto exitosamente";
            header("location: inventario.php");
            exit();

        }while(false);

    }
?>