<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();



//Inlcuímos a la clase PDF_MC_Table
require('PDF_MC_Table.php');
 
//Instanciamos la clase para generar el documento pdf
$pdf=new PDF_MC_Table('L','mm','letter');
 
//Agregamos la primera página al documento pdf
$pdf->AddPage();
 
//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

 
//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
//$pdf->SetFillColor(255,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->SetFont('Arial','B',12);


$pdf->Image('ceutec.png', 10, 14, -900);



$pdf->Cell(60,6,'',0,0,'C');
$pdf->Cell(150,6,'CEUTEC C.A',1,0,'C');
$pdf->Ln(30);
//$pdf->addDate( "29/11/2022");
$pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
$pdf->Ln(30);
//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,6,'RTN',1,0,'C',1);
$pdf->Cell(85,6,'Nombre',1,0,'C',1);
$pdf->Cell(30,6,'Telefono',1,0,'C',1);
$pdf->Cell(60,6,'Direccion',1,0,'C',1); 
$pdf->Ln(6);
//Comenzamos a crear las filas de los registros según la consulta mysql
require_once "../modelos/ejecutarSQL.php";
$categoria1=new ejecutarSQL();
if (isset($_GET['id'])){
  $id=$_GET['id'];
  $rspta = $categoria1->listar("SELECT * FROM PROVEEDOR where idproveedor=".$id);
}else
$rspta = $categoria1->listar("SELECT * FROM PROVEEDOR");

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(25,85,30,60));

while($reg= $rspta->fetch_object())
{  
    $nombre = $reg->proveedor;
 	$pdf->SetFont('Arial','',7); 
    $pdf->Row(array($reg->rtn,utf8_decode($nombre),$reg->telefono,$reg->direccion));
}
 
//Mostramos el documento pdf
$pdf->Output();


ob_end_flush();

?>
<script type="text/javascript" src="scripts/proveedor.js"></script>