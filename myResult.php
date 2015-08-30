<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">RESULT PAGE</h1>
	<?php if(isset($_POST['nim'])){ ?>
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
	<?php } ?>
	<hr>
	<a href="index.html">Back to Index</a>
</body>
</html>