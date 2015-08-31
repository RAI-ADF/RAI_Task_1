
<html>
<head>
	<title>Form Post</title>
</head>
<body>
	<h2>Form Post</h2>
	<form action="myResult.php" method="post">
		<input type ="hidden" name="nim" value="1103120197"/>
		Name : <input type ="text" name="name" />
		</br>
		</br>
		Sex : 
		<input type="radio" name="sex" value="pria" checked>Pria
		<input type="radio" name="sex" value="wanita">Perempuan
		</br>
		</br>
		Address : 
		<textarea name="address"></textarea>
		</br>
		</br>
		Class: 
		<select name="class">
			<option value="ICM 36 01">ICM 36 01</option>
			<option value="ICM 36 02">ICM 36 02</option>
			<option value="ICM 36 03">ICM 36 03</option>
		</select>
		</br>
		</br>
		Vegetarian? (Check if Yes, ignore if not): 
		<input name="veget" type="checkbox" value="Yes"/>Yes
		</br>
		</br>
		<input type="submit" value="Proses Data">
		<input type="reset" value="Reset">
	</form>
	<a href="index.html"><button>Back to Index</button></a>
</body>
</html>
