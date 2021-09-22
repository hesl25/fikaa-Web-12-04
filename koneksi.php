<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "arkademy";

$db = mysqli_connect($host, $user, $pass, $database);
if(!$db){
	die("Koneksi gagal!!");
}
?>