<?php

if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
}

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if(isset($carrito_mio[$i])){
            if($carrito_mio[$i]!=NULL){
                if(!isset($carrito_mio['cantidad'])){
                    $carrito_mio['cantidad'] = '0';
                }else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];
                }
                    $total_cantidad = $carrito_mio['cantidad'];
                    $total_cantidad ++ ;
                    if(!isset($totalcantidad)){$totalcantidad = '0';}
                        else{
                            $totalcantidad = $totalcantidad;
                        }
                        echo $totalcantidad;
                        echo $total_cantidad;
                    // $totalcantidad += $total_cantidad;
                }
            }
        }
}
    //declaramos variables
    if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}
?>
