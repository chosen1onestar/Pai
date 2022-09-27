<html>
<?php


    $papere[0] = "Chlieb";
    $papere[1] = "Bulka";
    $papere[2] = "Tost";

    for($j=2; $j >= 0; --$j){
        echo "$papere[$j] <br><br>"; 
    }

	$nazwy['T'] = "Tak Jest"; 
    $nazwy['N'] = "Nie";   
    $nazwy['M'] = "Moze";      


    foreach($nazwy as $item => $description){
        echo "$item: $description <br>";
    }

    echo $nazwy['T'] . " " . $nazwy['N'] . " " . $nazwy['M'];

 

?>
</html>