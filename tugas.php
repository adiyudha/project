<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
		<form method="post" action="" enctype="multipart/form-data">
		<fieldset>	
			<legend>Ticket Online</legend>
			Tujuan:	<select name="tujuan">
				<option value="Jakarta-Semarang">Jakarta-Semarang</option>
				<option value="Jakarta-Jogja">Jakarta-Jogja</option>
				<option value="Jakarta-Solo">Jakarta-Solo</option>
			</select><br>
			Jam keberangkatan
			<input type="radio" name="jam" value="8.00">8.00
			<input type="radio" name="jam" value="8.00">9.00
			<input type="radio" name="jam" value="8.00">10.00 <br>
			Jumlah penumpang
			<input type="number" name="penumpang" > <br>	
			<input type="submit" name="next" value="Next">
			<input type="reset" name="reset" value="Reset">


		</fieldset>
		</form>

		<form method="post" action="tugas.php" enctype="multipart/form-data">
		<input type="hidden" name="">
		<fieldset>	
			<legend>Ticket Online</legend>
			Nama Penumpang : <input type="text" name="penumpang1"> <br>	
			Nama Penumpang : <input type="text" name="penumpang2"> <br>	
			Nama Penumpang : <input type="text" name="penumpang3"> <br>	
			Nama Penumpang : <input type="text" name="penumpang4"> <br>	
			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">
		</fieldset>
		</form>

</body>
</html>