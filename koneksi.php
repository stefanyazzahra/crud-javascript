<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lspp";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
//Check connection
if (mysqli_connect_error())
die ("koneksi database gagal: ".mysqli_connect_error());
}


?>