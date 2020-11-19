<?php 

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "#Qwerty3";
$dBName = "projeto";

$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if($conn->connect_error){
    die("Connection failed: ".mysqli_connect_error());
}