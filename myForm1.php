<!DOCTYPE html>
<html>
<body>

<form action="myResult.php" method="GET" >	
	<center>
	<fieldset style="width:40%">
	    <legend>Personal information</legend>
	    <table>
		    <tr>
		    	<td>Name</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="text" name="firstname" value=""></td>
		    </tr>   
		    <tr>
		    	<input type="hidden" name="nim" value="1103124295">
		    </tr>
		    <tr>
		    <td> Sex </td>
		    <td style="text-align:center">:</td>
		    <td>
			<input type="radio" name="sex" value="male">Male <br>
			<input type="radio" name="sex" value="male">Female
		    </td>
		    </tr>
		    <tr>
		    	<td>My vehicle</td>
		    	<td style="text-align:center">:</td>
		    	<td><input type="checkbox" name="vehicle" value="Bike">I have a bike
					<br>
					<input type="checkbox" name="vehicle" value="Car">I have a car 
		    	</td>
		    </tr>
		    <tr>
		    	<td>Fakultas</td>
		    	<td style="text-align:center">:</td>
		    	<td>		
		    		<select name="fakultas">
						<option value="FIF">Informatika</option>
						<option value="FTE">Elektro</option>
						<option value="FRI">FRI</option>
						<option value="FKB">Komunikasi Bisnis</option>
						<option value="FIT">Ilmu Terapan</option>
					</select>
				</td>
		    </tr>
		    <tr>
		    	<td>Alamat</td>
		    	<td style="text-align:center">:</td>
		    	<td><textarea name ="alamat" clos="30" rows="2"></textarea></td>
		    </tr>
		    <tr>
		    	<td><input type="reset" name="reset" value="Reset"></td>
		    	<td></td>	    	
		    	<td style="text-align:right"><input type="submit" name="submit" value="Submit"></td>
		    </tr>
		</table>	    
    </fieldset>
    </center>
</form>

</body>
</html>
