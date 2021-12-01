<?php

$d = 3 ;
$c = 0 ;

for ($i = 1; $i <= 10; $i++) {
	for ($b = 3 + $c; $b <= $d; $b++) {
		echo $b . " ";
	}
	$c += 2 ;
	$d += 3 ;  
	echo '<br>';
}
?>