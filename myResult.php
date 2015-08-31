<html>
<head>
	<title>1103120159-Hasil</title>
	<style type="text/css">
		h1	{background-color:darkorange;  font-family: verdana; color: white}
		h2	{font-family: verdana; color: white;}
		h3	{font-family: verdana; color: white;}
		td 	{font-family: verdana}
		form{width:500px;}
	</style>
	</head>
	<body bgcolor="orange">
		<div align="center">
		<h1>HASIL</h1>
		<?php
		if (isset($_GET['nama']) && isset($_GET['warna']) && isset($_GET['komentar']) && isset($_GET['angkatan']) && isset($_GET['rating']) && isset($_GET['hiddenField']) && isset($_GET['submit'])) {

		  $nama = $_GET['nama'];
		  $warna = $_GET['warna'];
		  $komentar = $_GET['komentar'];
		  $angkatan = $_GET['angkatan'];
		  $rating = $_GET['rating'];
		  $hiddenField = $_GET['hiddenField'];


		  echo '<h3>Nama anda '. $nama. '. Angkatan '. $angkatan.'. Warna favorit adalah '. $warna. '. Komentar anda '. $komentar. '.';
		  echo '<br>Rating website '. $rating. '. NIM pembuat Website adalah '. $hiddenField. '.';
		}
		elseif (isset($_POST['nama']) && isset($_POST['jeniskelamin']) && isset($_POST['jp']) && isset($_POST['message']) && isset($_POST['rating']) && isset($_POST['hiddenField']) && isset($_POST['submit'])) {

		  $nama = $_POST['nama'];
		  $jeniskelamin = $_POST['jeniskelamin'];
		  $jp = $_POST['jp'];
		  $message = $_POST['message'];
		  $rating = $_POST['rating'];
		  $hiddenField = $_POST['hiddenField'];


		  echo '<h3>Nama anda '. $nama. '. Jenis kelamin anda '. $jeniskelamin.'. Jenjang pendidikan anda '. $jp. '. Pesan anda kepada kami adalah '. $message. '.';
		  echo '<br>Rating website '. $rating. '. NIM pembuat Website adalah '. $hiddenField. '.';
		}
		?>

		

		</br>
		<h2><a href="index.html">Kembali ke Halaman Utama</a>
</body>
</html> 