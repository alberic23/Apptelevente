<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ipam";

//PHP procédural
$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if(!$conn){
    die("Connection échouée!" .mysqli_connect_error());
}

?>