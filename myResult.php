<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Simple CV</title>
</head>
<body>
	<?php
	
	if(isset($_POST['submit'])){
		echo "Saya yg bertanda tangan di bawah ini <br>".
		"Nama: ".$_POST['name'].'</br>'.
		"NIM: ".$_POST['nim'].'</br>'.
		"Jenis Kelamin: ".$_POST['sex']."</br>".
		"Ingin mendapatkan nilai ".$_POST['nilai']." pada Mata Kuliah RAI karena ".$_POST['kesan'];
	}else if(isset($_GET['submit'])){
		echo "Saya yg bertanda tangan di bawah ini <br>".
		"NIM: ".$_GET['nim'].'</br>'.
		"Suka makan ".$_GET['makanan']." sebanyak ".$_GET['porsi']. " porsi";
	
	}	
		
		
	
	
	?>
 
	<br><br><a href="Index.html">Back To Index</a>
</body>
</html>

