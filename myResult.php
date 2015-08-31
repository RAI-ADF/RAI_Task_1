<!DOCTYPE html>
<html>
	<head>
		<title>Result Page</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	<body>
		
		<div id="content">
			<div id="title">Result Page</div>

			<?php if(isset($_POST['nama'],$_POST['jkelamin'],$_POST['agama'],$_POST['hobi'],$_POST['pesan'],$_POST['nim'])){ ?>
				<pre>
					<label for="nama"		>Nama			: </label>
					<?php echo $_POST['nama']; ?>

					<label for="jkelamin"	>Jenis Kelamin	: </label>
					<?php echo $_POST['jkelamin']; ?>

					<label for="agama"		>Agama			: </label>
					<?php echo $_POST['agama']; ?>

					<label for="hobi"		>Hobi			: </label>
					<?php echo $_POST['hobi']; ?>

					<label for="pesan"		>Pesan			:  </label>
					<?php echo $_POST['pesan']; ?>
					
					<label for="nim"		>NIM saya		: </label>
					<?php echo $_POST['nim']; ?>

				</pre>
			
			<?php } elseif (isset($_GET['nama'],$_GET['jkelamin'],$_GET['agama'],$_GET['hobi'],$_GET['pesan'],$_GET['nim'])) { ?>
				<pre>
					<label for="nama"		>Nama			: </label>
					<?php echo $_GET['nama']; ?>

					<label for="jkelamin"	>Jenis Kelamin	: </label>
					<?php echo $_GET['jkelamin']; ?>

					<label for="agama"		>Agama			: </label>
					<?php echo $_GET['agama']; ?>

					<label for="hobi"		>Hobi			: </label>
					<?php echo $_GET['hobi']; ?>

					<label for="pesan"		>Pesan			:  </label>
					<?php echo $_GET['pesan']; ?>
					
					<label for="nim"		>NIM saya		: </label>
					<?php echo $_GET['nim']; ?>
				</pre>
			<?php } ?>

			<div id="navigation">
				<ul>
					<li><a href="Index.html">Back to Index</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>

<html>
<head>
<title>Submitted data</title>
</head>

<body>

</body>
</html>

