<?php
if(isset($_GET['submit'])){
	$nim = @S_GET['nim'];
	$fname = @$GET('firstname');
echo "Nama Lengkap ".@firstame."<br>";
echo "NIM ".@S_GET['nim']."<br>";
echo "Jenis Kelamin ".@S_GET['sex']."<br>";
echo "Kendaraan ".@S_GET['vehicle']."<br>";
echo "Fakultas ".@S_GET['fakultas']."<br>";
echo "Alamat  ".@S_GET['alamat']."<br>";
}elseif(isset($_POST['submit'])){
	fname = $_POST['fname'];
	nim = $_POST['nim'];
echo "Nama Lengkap ".@fname."<br>";
echo "NIM ".@S_POST['lname']."<br>";
echo "Jenis Kelamin ".@S_POST['sex']."<br>";
echo "Kendaraan ".@S_POST['vehicle']."<br>";
echo "Fakultas ".@S_POST['fakultas']."<br>";
echo "Alamat ".@S_POST['alamat']."<br>";
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
