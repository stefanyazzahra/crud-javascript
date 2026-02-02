<!DOCTYPE html>
<h2> CRUD DATA USER </h2>
<br/>
<a href="tambah.php">+TAMBAH USER</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>NAMA</th>
<th>JENIS KELAMIN</th>
<th>USIA</th>
<th>PENDIDIKAN TERAKHIR</th>
<th>ALAMAT</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "select * from table_from"); while($d = mysqli_fetch_array($data)){

	?>
	<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $d['nama']; ?></td>
	<td><?php echo $d['jenis_kelamin']; ?></td>
	<td><?php echo $d['pendidikan_terakhir']; ?></td>
	<td><?php echo $d['alamat']; ?></td>
	<td>
	<a href="edit.php?id=<?php echo $d['id'];
	?>">EDIT</a>
	   <a href="hapus.php?id=<?php echo $d['id'];
	?>">HAPUS</a>
	</td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>
	
