<html>
<body>
	
<?php
$a = 4;


for($i=0;$i<=$a;$i++) {
for($j=0;$j<=$a;$j++){
echo '*';
}
echo '<br />';
}

for($a=1; $a<=10; $a++){
for($b=1; $b<=10; $b++){
echo $a.'x'.$b.'='.$a*$b.'</br>';
}
}

?>
	
</body>
</html>