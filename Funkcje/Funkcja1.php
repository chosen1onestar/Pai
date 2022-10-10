<html>

    <body>
		
		<form action="./Funkcja1.php" method="POST">
		Wybierz wiek: <input type="number" name="n" value="n">
        <input type="submit" value="wyslij">
		</form>    
		<?php
			if(isset($_POST['n'])){
			echo "Twój wiek: " . htmlspecialchars($_POST['n']) . "<br>";
			$n= $_POST['n'];
			wiek($n); }
			
			function wiek($n) {
			   if($n<=18) {
					echo "Jestes mlody";
			    }
				elseif($n<=65) {
					echo "Jestes dorosly";
				}
				elseif($n>=65){
					echo "Jestes stary";
				}
			}
		?>
		
    </body>
	
</html>