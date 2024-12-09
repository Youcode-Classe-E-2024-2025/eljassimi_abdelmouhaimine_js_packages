<?php 

$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "javascriptpackages";


$connection = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$connection){
    die("connection failed");
}
?>

