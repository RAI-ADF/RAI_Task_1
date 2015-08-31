<!DOCTYPE html>
<html>
<head>
<title>RESULT PAGE</title>
<link rel="shortcut icon" href="img/bukanjoker.png">
</head>
<body bgcolor="#34495e">
	<style >
		p,h1,h2,h3,a,pre{
			text-decoration: none;
			font-family: Futura Md BT;
			color: #7f8c8d;
		}
	</style>
	<center>
		<h1>Hasil Kuisioner Anda</h1>
	</center>
	<div style="margin-left: 200px">
		<p>
			<br>Nama : <?php echo $_REQUEST['nama']; ?>

			<br>Alamat : <?php echo $_REQUEST['alamat']; ?>
			
			<br>Jenis Kelamin : <?php echo $_REQUEST['kelamin']; ?>
			
			<br>Keahlian yang dimiliki :<?php
					if (count($_REQUEST['chek']) == 0) {
						echo "Nothing";
					} else {
						for ($i=0; $i < count($_REQUEST['chek']); $i++) {
						echo $_REQUEST['chek'][$i];
						}
					}
					
				?>
			
			<br>Divisi yang dipilih : <?php echo $_REQUEST['divisi']; ?>

			<br>
			<br>
			<i>Created by <?php echo $_REQUEST['myNIM']; ?></i>
		</p>
		<br>
		<br>
		<br>
		<a href="index.html">Back to Home</a>
	</div>

	<center>
	  	<a href="index.html"><img src="img/bukanjoker.png" style="width: 10%"></a>
	  
	  	<p>2015 &copy; <a href="http://bukanjoker.tumblr.com" target="_blank">Bukanjoker Production</a></p>
	</center>

</body>
</html>
