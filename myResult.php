<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<h2>Result</h2>
	<?php if(isset($_POST['id'])){ ?>
	<h3><?php echo $_POST['id']; ?></h3>
	<table>
		<tr>
			<td>nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama']; ?></td>
		</tr>
		<tr>
			<td>gender</td>
			<td>:</td>
			<td><?php echo $_POST['gender']; ?></td>
		</tr>
		<tr>
			<td>gender</td>
			<td>:</td>
			<td><?php echo $_POST['gender']; ?></td>
		</tr>
		<tr>
			<td>pekerjaan</td>
			<td>:</td>
			<td><?php echo $_POST['pekerjaan']; ?></td>
		</tr>
		<tr>
			<td>keahlian</td>
			<td>:</td>
			<td>
				<?php foreach ($_POST['keahlian'] as $keah) {
				echo $keah.' , ';
				}?>
			</td>
		</tr>
		<tr>
			<td>komentar</td>
			<td>:</td>
			<td><?php echo $_POST['komentar']; ?></td>
		</tr>
	</table>
	<?php }else{?>
	<h3><?php echo $_GET['id']; ?></h3>
	<table>
		<tr>
			<td>nama</td>
			<td>:</td>
			<td><?php echo $_GET['nama']; ?></td>
		</tr>
		<td>
			<td>gender</td>
			<td>:</td>
			<td><?php echo $_GET['gender']; ?></td>
		</td>
		<td>
			<td>gender</td>
			<td>:</td>
			<td><?php echo $_GET['gender']; ?></td>
		</td>
		<td>
			<td>pekerjaan</td>
			<td>:</td>
			<td><?php echo $_GET['pekerjaan']; ?></td>
		</td>
		<td>
			<td>keahlian</td>
			<td>:</td>
			<td>
				<?php foreach ($_GET['keahlian'] as $keah) {
				echo $keah.' , ';
				}?>
			</td>
		</td>
		<td>
			<td>komentar</td>
			<td>:</td>
			<td><?php echo $_GET['komentar']; ?></td>
		</td>
	</table>
	<?php }?>
	<br><a href="index.php?back=myResult.php">index</a>
</body>
</html>


