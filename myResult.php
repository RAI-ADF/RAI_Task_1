<?php
if(isset($_GET['submit'])){
	$nim = $_GET['nim'];
	$fname = $_GET['firstname'];
	echo "Nama Lengkap ".$fname."<br>";
	echo "NIM ".$_GET['nim']."<br>";
	echo "Jenis Kelamin ".$_GET['sex']."<br>";
	echo "Kendaraan ".@$_GET['vehicle']."<br>";
	echo "Fakultas ".@$_GET['fakultas']."<br>";
	echo "Alamat  ".@$_GET['alamat']."<br>";
}elseif(isset($_POST['submit'])){
	$fname = $_POST['firstname'];
	$nim = $_POST['nim'];
	echo "Nama Lengkap ".@$fname."<br>";
	echo "NIM ".@$_POST['lname']."<br>";
	echo "Jenis Kelamin ".@$_POST['sex']."<br>";
	echo "Kendaraan ".@$_POST['vehicle']."<br>";
	echo "Fakultas ".@$_POST['fakultas']."<br>";
	echo "Hobi ".@$_POST['hobi']."<br>";
}else{
	echo "hello";
}
?>
<html>
<head>
	<title>myResult</title>
</head>
<body>
	<A HREF="Index.html">Click Here to go to index</A>
</body>
</html>
