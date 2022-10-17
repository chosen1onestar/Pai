<html>
<body>

<?php

		function print_array($array) {
			for($i=0; $i<sizeof($array); $i++) {
				echo $array[$i];
				if($i != sizeof($array)-1) {
					echo ", ";
				}
			}
		}


		function main() {
			
			echo "<h3 style='margin-bottom: 1px;'>1</h3>";

			$array_liczby = [2,1,8,9,32,45,99,62,10,65];
			$zdanie = "Witam Pana";
			
			print_array($array_liczby);
			echo "</br>".$zdanie."</br>";
			
			
			echo "<h3 style='margin-bottom: 1px;'>2</h3>";

			$array_zdanie = explode(' ', $zdanie);

			
			echo "<h3 style='margin-bottom: 1px;'>3</h3>";

			echo "Ilość liczb: ".count($array_liczby)."</br>";
			echo "Ilość zdań: ".count($array_zdanie)."</br>";
			
					
			echo "<h3 style='margin-bottom: 1px;'>4</h3>";

			sort($array_liczby, SORT_NUMERIC);
			sort($array_zdanie, SORT_STRING);

			echo "Posortowane liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "Posortowane zdania: ";
			print_array($array_zdanie); 
			echo"</br>";		
		
				
			
			echo "<h3 style='margin-bottom: 1px;'>5</h3>";

			shuffle($array_liczby);
			shuffle($array_zdanie);

			echo "Przetasowane liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "Przetasowane zdania: ";
			print_array($array_zdanie);
			echo "</br>";
		
			
			
			
		}
		main()
	?>
</body>
</html>