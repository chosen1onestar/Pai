<html>
<body>

	<form action="./Zadanie3.php" method="POST">
		<select name="lista">
            <option>Tak</option>
            <option>Nie wiem</option>
            <option>Nie</option>
		</select><br><br><hr>
		
		X : <input type="radio" name="h"> <br>
		Y : <input type="radio" name="h"> <br>
		Z : <input type="radio" name="h"> <br>

		1 <input type="checkbox" name="sprawdz">
		2 <input type="checkbox" name="sprawdz">

		<input type="submit" value="wyslij">
	</form>
<?php
	echo $_POST['lista'];
	
	if(isset($_POST['h'])){
    if($_POST['h'] == '1') echo "Wybrana płeć: Mężczyzna";
    else echo "2: Kobieta";
}





?>
</body>

</html>