<?php
    if(isset($_SESSION['carrito']) || isset($_POST['sap'])){
        if(isset($_SESSION['carrito'])){
            $carrito_mio=$_SESSION['carrito'];
            if(isset($_POST['sap'])){
                $img=$_POST['img'];
                $nombre=$_POST['nombre'];
                $tipo=$_POST['tipo'];
                $precioCaja=$_POST['precioCaja'];
                $cantidad=$_POST['cantidad'];
                $donde=-1;
                if($donde != -1){
                    $cuanto=$carrito_mio[$donde]['cantidad'] + $cantidad;
                    $carrito_mio[$donde]=array("img"=>$img, "nombre"=>$nombre,"precioCaja"=>$precioCaja,"cantidad"=>$cuanto,"tipo"=>$tipo);
                }else{
                    $carrito_mio[]=array("img"=>$img, "nombre"=>$nombre,"precioCaja"=>$precioCaja,"cantidad"=>$cantidad,"tipo"=>$tipo);
                }
            }
        }else{
            $img=$_POST['img'];
            $nombre=$_POST['nombre'];
            $tipo=$_POST['tipo'];
            $precioCaja=$_POST['precioCaja'];
            $cantidad=$_POST['cantidad'];
            $carrito_mio[]=array("img"=>$img, "nombre"=>$nombre,"precioCaja"=>$precioCaja,"cantidad"=>$cantidad,"tipo"=>$tipo);
        }
    $_SESSION['carrito']=$carrito_mio;
    }

?>