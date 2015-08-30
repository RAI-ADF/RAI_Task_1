<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
</head>
<body>
	<h1 align="center">RESULT PAGE</h1>
	<?php if(isset($_POST['nim'],$_POST['name'],$_POST['gender'],$_POST['address'])){ ?>
		<h2 align="center">FORM 1 : POST</h2>
		<table align="center" cellpadding="12">
			<tbody>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $_POST['nim']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $_POST['name']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><?php echo $_POST['gender']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>:</td>
					<td><?php echo $_POST['address']; ?></td>
				</tr>
			</tbody>
		</table>
	<?php } elseif (isset($_GET['nim'],$_GET['name'],$_GET['occupation'],$_GET['language'])) { ?>
		<h2 align="center">FORM 2 : GET</h2>
		<table align="center" cellpadding="12">
			<tbody>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $_GET['nim']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $_GET['name']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td><?php echo $_GET['occupation']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>:</td>
					<td><?php echo implode(', ', $_GET['language']); ?></td>
				</tr>
			</tbody>
		</table>
	<?php } else{ ?>
		<meta http-equiv="refresh" content="3; URL='index.html'" />
		<p align="center">Please check your input, make sure all field are completed. You'll redirected to index in 3 seconds.</p>
	<?php } ?>
	<hr>
	<a href="index.html">Back to Index</a>
</body>
</html>