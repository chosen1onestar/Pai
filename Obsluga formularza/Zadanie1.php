<html>
	<head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="./Zadanie1.php" method="POST">
	Login <input type="text" name="imie" /><br>
	Haslo <input type="password" name="haslo"><br>
	Zapamietaj mnie <input type="checkbox" name="zapamietaj" ><br><br>
	<input type="submit" />
	</form>
	<?php

		if(isset($_POST['imie'])){
		echo "Login: " . htmlspecialchars($_POST['imie']) . "<br>"; }
		
		if(isset($_POST['haslo'])){
		echo "haslo: " . sha1($_POST['haslo']) . "<br>";} 
		
		if(isset($_POST['zapamietaj'])){
			for($i=0; $i<count($_POST['zapamietaj']); $i++){			
				echo "Zostało zaznaczone";
			}
		}else{ 
				echo "Nie zostało wybrane";}	


	?>

	</body>
</html>

