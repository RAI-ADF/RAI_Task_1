<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Simple CV</title>
</head>
<a href="Index.html">Home</a>
<body>
	<?php
	
	if(isset($_POST['submit'])){
		echo @$_POST['fname'].'</br>';
		echo @$_POST['lname'].'</br>';
		echo @$_POST['sex']."</br>";
		echo @$_POST['faculty']."</br>";
		echo @$_POST['fname']."</br>";
		echo @$_POST['description']."</br>";
		echo @$_POST['vehicle']."</br>";
		echo "hidden value".@$_POST['nim']."</br>";
	
	}
		
	if(isset($_GET['submit'])){
		echo @$_GET['fname'].'</br>';
		echo @$_GET['lname'].'</br>';
		echo @$_GET['sex']."</br>";
		echo @$_GET['faculty']."</br>";
		echo @$_GET['fname']."</br>";
		echo @$_GET['description']."</br>";
		echo @$_GET['vehicle']."</br>";
		echo "hidden value".$_GET['nim']."</br>";
	
	}	
		
		
	
	
	?>
 
	
</body>
</html>

