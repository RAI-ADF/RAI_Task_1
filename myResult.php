<?php 
	
	if(isset($_GET['id'])){
		
		$nama = $_GET['nama'];
		$jenis_kel = $_GET['jenis_kel'];
		$kelas = $_GET['kelas'];
		$matkul = $_GET['matkul'];
		$deskrpisi = $_GET['deskripsi'];
		$id = $_GET['id'];

	} else if(isset($_POST['id'])){
		
		$nama = $_POST['nama'];
		$jenis_kel = $_POST['jenis_kel'];
		$kelas = $_POST['kelas'];
		$matkul = $_POST['matkul'];
		$deskrpisi = $_POST['deskripsi'];
		$id = $_POST['id'];

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
</head>
<body>
	<table>
		<tr>
			<td>Nama</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $jenis_kel; ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><?php echo $kelas; ?></td>
		</tr>
		<tr>
			<td>Mata Kuliah</td>
			<td><?php echo $matkul; ?></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><?php echo $deskrpisi; ?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td><?php echo $id; ?></td>
		</tr>
	</table>
</body>
</html>

