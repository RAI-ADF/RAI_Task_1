<!DOCTYPE html>
<html>
	<head>
	<title>  Nabil Farras  </title>
  <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/nabil.css" type="text/css">
    <link rel="stylesheet" media="screen" href="fonts/font-awesome/font-awesome.min.css">

    <?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$phone = $_GET["phone"];
	$nim = "1103124323";
	?>

	</head>

	<body id="page-top">
		<header class="header_myResult">
        <div class="header-content">
            <div class="header-content-inner text-left">
                <h1>RESULT FROM FORM</h1>
                <h3>Nama : <?php
				 echo $name;
				 ?> </h3>
				  <h3>Email : <?php
				 echo $email;
				 ?> </h3>
				  <h3>Subject : <?php
				 echo $subject;
				 ?> </h3>
				 <h3>Message : <?php
				 echo $message;
				 ?> </h3>
				 <h3>Jenis Kelamin : <?php
				 echo $jenis_kelamin;
				 ?> </h3> 
				 <h3>Nomor Telefon : <?php
				 echo $phone;
				 ?> </h3> 
				 <h3>Hidden Value : <?php
				 echo $nim;
				 ?> </h3> 
				 <a href="homepage.html" class="btn btn-index ">BACK HOME PAGE</a>
            </div>
        </div>
   		</header>
	</body>

	<!--  	 jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/scroll.js"></script>


</html>