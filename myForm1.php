
<html>
<head>
	<title>Form Post</title>
</head>
<body>
	<h2>Form Post</h2>
	<form action="myResult.php" method="post">
		<input type ="hidden" name="nim" value="1103120201"/>
		Nama : <input type ="text" name="name" />
		</br>
		</br>
		Jenis Kelamin : 
		<input type="radio" name="sex" value="pria" checked>Pria
		<input type="radio" name="sex" value="wanita">Perempuan
		</br>
		</br>
		Alamat : 
		<textarea name="address"></textarea>
		</br>
		</br>
		Hobi: 
		<select name="class">
			<option value="Berenang">Berenang</option>
			<option value="Voley">Voley</option>
			<option value="Basket">Basket</option>
		</select>
		</br>
		</br>
		Indonesian? (Check if Yes, ignore if not): 
		<input name="nation" type="checkbox" value="Yes"/>Yes
		</br>
		</br>
		<input type="submit" name="ButtonPost" value="Proses Data">
		<input type="reset" value="Reset">
	</form>
	<a href="index.html"> Back </a><br>
	<a href="home.html"> Back to CSS</a>
</body>
</html>
