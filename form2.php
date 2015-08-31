<!DOCTYPE html>
<html>
  <head>
    <title>Form 2</title>
	
	<!-- include css file here-->
   <link type="text/css" rel="stylesheet" href="style.css"/>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  ljnskelamin="post" action="FormResult.php" id="form">
			<h2>FORM 2</h2><hr/>		
			
			<label>Nama :</label> &nbsp;
			<input type="text" name="fnama" id="fnama" /> <br>
			
			<p><label>Nim :</label>
			<input type="text" name="lalamat" id="lalamat" /> <br>
			</p>
			
			<label>Jenis Kelamin :</label>
			<span><input type="radio" name="ljnskelamin" value="Laki-Laki" checked> Laki-Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="ljnskelamin" value="Perempuan" > Perempuan </span>	
			
			<p><label>Agama : </label>
			<select>
					<option nama="agama" value="Islam">Islam</option>
					<option nama="agama" value="Kristen">Kristen</option>
					<option nama="agama" value="Budha">Budha</option>
					<option nama="agama" value="Hindu">Hindu</option>
			</select>
			</p>
			<br>
			<label>Device :</label>
			<input type="checkbox" name="ldevice" value="Smartphone" /> Smartphone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="ldevice" value="Tablet" /> Tablet
			
			<p>
			<input type="submit" name="submit" id="submit" value="Submit">
			<input type="reset" name ="Reset Form">
			</p>
			<a href ="home.HTML"> <h4> Back Home </h4> </a>
		  </form>
		<?php include "result.php";?>
		
		</div>
   </div>

  </body>
</html>