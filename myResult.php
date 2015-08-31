
<html>
	<head>
		<?php
			$nimpost = $_POST["nim"];
			$nimget = $_GET["nim"];
			
			$namepost = $_POST["name"];
			$nameget = $_GET["name"];
			
			$addresspost = $_POST["address"];
			$addressget = $_GET["address"];
			
			$classpost = $_POST["class"];
			$classget = $_GET["class"];
			
			$vegetpost = $_POST["veget"];
			$vegetget = $_GET["veget"];
		?>
	</head>
	<body>
		<table>
			<tr>
				<td>ID</td>
				<td>: </td>
				<td><?php echo $nimpost.$nimget?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>: </td>
				<td><?php echo $namepost.$nameget?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>: </td>
				<td><?php echo $addresspost.$addressget?></td>
			</tr>
			<tr>
				<td>Class</td>
				<td>: </td>
				<td><?php echo $classpost.$classget?></td>
			</tr>
			<tr>
				<td>Veget</td>
				<td>: </td>
				<td><?php if($vegetpost==""){echo "No";}else{echo $vegetpost.$vegetget;}?></td>
			</tr>
		</table>
		<a href="index.html"><button>Back to Index</button></a> 
	</body>
</html>
