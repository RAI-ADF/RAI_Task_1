<html>
<head>
	<title>Result</title>
</head>
<body>
	<h1>Hasil Kuisioner Anda</h1>

	<br>Nama :
	<?php echo $_REQUEST['nama']; ?>

	<br>NIM :
	<?php echo $_REQUEST['nim']; ?>
	
	<br>Jenis Kelamin :
	<?php echo $_REQUEST['kelamin']; ?>
	
	<br>Device yang dimiliki :
	<?php
		if (count($_REQUEST['device']) == 0) {
			echo "Nothing";
		} else {
			for ($i=0; $i < count($_REQUEST['device']); $i++) {
			echo $_REQUEST['device'][$i];
			}
		}
		
	?>
	
	<br>Browser yang sering dipakai :
	<?php echo $_REQUEST['browser']; ?>
	
	<br>Komentar :
	<?php echo $_REQUEST['komentar']; ?>

	<br><br><i>Created by <?php $_REQUEST['myNIM']; ?></i>

	<br><br><br><a href="index.html">Back to Home</a>
</body>
</html>