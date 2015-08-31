
<html>
	<head>
		<?php
			error_reporting(E_ALL ^ E_NOTICE);
			if(isset($_POST["ButtonPost"])){
				$nim = $_POST["nim"];
				$name = $_POST["name"];
				$address = $_POST["address"];
				$class = $_POST["class"];
				$nation = $_POST["nation"];
			}else{
				$nim = $_GET["nim"];
				$name = $_GET["name"];
				$address = $_GET["address"];
				$class = $_GET["class"];
				$nation = $_GET["nation"];
			}
		?>
	</head>
	<body>
		<table>
			<tr>
				<td>NIM</td>
				<td>: </td>
				<td><?php echo $nim; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: </td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: </td>
				<td><?php echo $address; ?></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>: </td>
				<td><?php echo $class; ?></td>
			</tr>
			<tr>
				<td>Nation</td>
				<td>: </td>
				<td><?php if($nation == ""){echo "No";}else{echo $nation;}?></td>
			</tr>
		</table>
	</body>
</html>
