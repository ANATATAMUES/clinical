<?php
$servername = "localhost";
$database = "cesmedec_clinical";
//$username = "cesmedec_clinical";
//$password = "Cesmed1994*";

$username = "root";
$password = "";

// Crear conexi��n
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");
// Verificar Conexi��n 
if (!$conn) {
    die("Conex��n fallida: " . mysqli_connect_error());
}

?>