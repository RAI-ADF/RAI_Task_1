<!DOCTYPE html>
<html>
<head>
	<title>myResult</title>
</head>
<body>	
	<table>
		<?php if ( isset($_POST['is_post']) ) {
				if ($_POST['is_post'] == 'true') { 
		?>
		<tr>
			<td>
				NIM
			</td>
			<td>:</td>
			<td><?php
				echo $_POST["nim"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>
				Current Activity	
			</td>
			<td>:</td>
			<td><?php
				echo $_POST["currentActivity"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Dream Job</td>
			<td>:</td>
			<td><?php
				echo $_POST["dreamJob"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Your Reason</td>
			<td>:</td>
			<td><?php
				echo $_POST["reasons"]; 
				?>
			</td>
		</tr>
		<?php 
				}
			
			}
		else
		{ 
		?>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><?php
				echo $_GET["mynim"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td>:</td>
			<td><?php
				echo $_GET["angkatan"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php
				echo $_GET["jurusan"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>No HP</td>
			<td>:</td>
			<td><?php
				echo $_GET["hp"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>:</td>
			<td><?php
				echo $_GET["facebook"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Id Line</td>
			<td>:</td>
			<td><?php
				echo $_GET["idline"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Id Kaskus</td>
			<td>:</td>
			<td><?php
				echo $_GET["idkaskus"]; 
				?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<p>
    *klik <a href="index.html">here</a> to go back to index page
    </p>

</body>
</html>

