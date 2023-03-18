<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="phpproyecto";

$con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$con){
    die("Coneccion Fallida: " . mysqli_connect_error());
}