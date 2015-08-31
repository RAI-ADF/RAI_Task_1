<!DOCTYPE html>
<html>
<head>
	<title>myResult</title>
</head>
<body>
	<h1 align="center">myResult</h1>
	<?php if(isset($_POST['nim'],$_POST['nama'],$_POST['topik'],$_POST['abstrak'])){ ?>
		<h2 align="center">myForm1 Result (POST)</h2>
		<table align="center" cellpadding="2">
			<tbody>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $_POST['nim']; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $_POST['nama']; ?></td>
				</tr>
				<tr>
					<td>Topik TA</td>
					<td>:</td>
					<td><?php echo $_POST['topik']; ?></td>
				</tr>
				<tr>
					<td>Abstraksi TA</td>
					<td>:</td>
					<td><?php echo $_POST['abstrak']; ?></td>
				</tr>
			</tbody>
		</table>
	<?php } elseif (isset($_GET['nim'],$_GET['nama'],$_GET['topik'],$_GET['abstrak'])) { ?>
		<h2 align="center">myForm2 Result (GET) </h2>
		<table align="center" cellpadding="2">
			<tbody>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $_GET['nim']; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $_GET['nama']; ?></td>
				</tr>
				<tr>
					<td>Topik TA</td>
					<td>:</td>
					<td><?php echo $_GET['topik']; ?></td>
				</tr>
				<tr>
					<td>Abstraksi TA</td>
					<td>:</td>
					<td><?php echo $_GET['abstrak']; ?></td>
				</tr>
			</tbody>
		</table>
	<?php } ?>
	<hr>
	<a href="Index.html">Back to Index</a>
</body>
</html>
