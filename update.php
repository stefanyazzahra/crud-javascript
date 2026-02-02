<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, 'update form sec nama= '$nama', jenis_kelamin= '$jenis_kelamin', usia='$usia', pendidikan_terakhir='$pendidikan_terakhir',alamat='$alamat'where id=

header("localtion:index.php");