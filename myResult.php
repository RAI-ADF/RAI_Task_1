



<?php
// Ini kalau mau dijadiin satu file si POST sama Get nya. masukin ke variabel, nanti variabelnya dipanggil pake "echo"
if (isset($_GET['submit'])){
	$nim = @$_GET['nim'];
	$fname = @$_GET['fname'];
echo "Nama Lengkap ".@$fname."<br>";
echo "Nama Panggilan ".@$_GET['lname']."<br>";
echo "NIM ".@$_GET['nim']."<br>";
echo "Jenis Kelamin ".@$_GET['sex']."<br>";
echo "Alamat ".@$_GET['address']."<br>";
echo "Pekerjaan ".@$_GET['pekerjaan']."<br>";
echo "Kendaraan ".@$_GET['vehicle']."<br>";
} elseif (isset($_POST['submit'])){
	$fname = @$_POST['fname'];
	$nim = @$_POST['nim'];	
echo "Nama Lengkap ".@$fname."<br>";
echo "Nama Panggilan ".@$_POST['lname']."<br>";
echo "Jenis Kelamin ".@$_POST['sex']."<br>";
echo "Alamat ".@$_POST['address']."<br>";
echo "Pekerjaan ".@$_POST['pekerjaan']."<br>";
echo "Kendaraan ".@$_POST['vehicle']."<br>";
}
?>
<html>
<body>
	<a href="index.html">Index</a>
</body>
</html>

<!--Nah yang aku bingung file myResult.html itu gimana bikinnya ._.
	Antara 3 ini nih yang aku bingung:
	1. si file php cuma ngambil data dari myForm terus di direct ke myResult.html -> gaktau caranya
	2. phpnya dimasukin ke myResult.html -> yang ini mah ngga bisa
	3. myResult itu ekstensinya php -> gaktau juga yang ini bener apa engga-->