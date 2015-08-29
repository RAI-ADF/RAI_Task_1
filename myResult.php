<!DOCTYPE html>
<html>
<head>
	<title>myResult</title>
</head>
<body>
	<table>
		<tr>
			<td>
				Current Activity	
			</td>
			<td>:</td>
			<td><?php
				echo $_POST["currentActivity"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Dream Job</td>
			<td>:</td>
			<td><?php
				echo $_POST["dreamJob"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Your Reason</td>
			<td>:</td>
			<td><?php
				echo $_POST["reasons"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>Genre of music</td>
			<td>:</td>
			<td><?php
				echo $_POST["genreMusic"]; 
				?>
			</td>
		</tr>
	</table>
	<p>
    *klik <a href="index.html">here</a> to go back to index page
    </p>
</body>
</html>

