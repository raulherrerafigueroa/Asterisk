<?php

function conectar(){

$servername = "172.30.91.20";
$database = "asterisk";
$username = "serviciosti";
$password = "Servicios&Ti#1019";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//MENSAJE DE CONEXION EXITOSA DE 
//echo "Connected successfully";
return $conn;

}

?>
