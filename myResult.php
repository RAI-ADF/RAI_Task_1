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
			<br><b>Nama : </b><?php echo $_REQUEST['nama']; ?>

			<br><b>Alamat : </b><?php echo $_REQUEST['alamat']; ?>
			
			<br><b>Jenis Kelamin : </b><?php echo $_REQUEST['kelamin']; ?>
			
			<br><b>Keahlian yang dimiliki : </b><?php
					if (count($_REQUEST['chek']) == 0) {
						echo "Nothing";
					} else {
						for ($i=0; $i < count($_REQUEST['chek']); $i++) {
							if ($i==0) {
								echo $_REQUEST['chek'][$i];
							} else {
								echo ", ".$_REQUEST['chek'][$i];
							}
								
						}
					}
					
				?>
			
			<br><b>Divisi yang dipilih : </b><?php echo $_REQUEST['divisi']; ?>

			<br>
			<br>
			<i>Created by <?php echo $_REQUEST['myNIM']; ?></i>
		</p>

		<br>
		<br>
		<br>
	</div>

	<center>
	  	<a href="index.html"><img src="img/bukanjoker.png" style="width: 10%"></a>
	  
	  	<p>2015 &copy; <a href="http://bukanjoker.tumblr.com" target="_blank">Bukanjoker Production</a></p>
	</center>

</body>
</html>
