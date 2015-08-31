<?php 
	
	if(isset($_GET['id'])){
		echo "get";
	} else if(isset($_POST['id'])){
		echo "post";
	}

?>