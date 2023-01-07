<?php

function conectaritop(){

$servername = "172.30.4.101";
$database = "itopprod";
$username = "itopuser";
$password = "u-2nk&=CFV";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//MENSAJE DE CONEXION EXITOSA DE BD
//echo "Connected successfully ITOP";
return $conn;

}

?>
