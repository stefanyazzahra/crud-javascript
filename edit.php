<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi SMK YAPPI Wonosari</title>
</head>
<body>

<h2>CRUD DATA USER<h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA USER</h3>
 
<?php
include 'koneksi.php';
$id = $_GET('id');
$data= mysqli_query($koneksi,"SELECT * FROM table_from WHERE id='$id'");
while($d = mysqli_fetch_array($data)) {
?>
<form method="post" action="update.php">
<table>
<form method="post" action="tambah_aksi.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
</td>
</tr>
<tr>
<td>Usia</td>
<td><input type="text" name="usia" value="<?php echo $d['usia']; ?>"></td>
</tr>
<tr>
<td>Pendidikan Terakhir</td>
<td><input type="text" name="pendidikan_terakhir" value="<?php echo $d['pendidikan_terakhir']; ?>"></td>
</tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?></td>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>


</body>
</html>


