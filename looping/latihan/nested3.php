<?php

$x = 6 ;
$r = 0 ;

for ($i = 1 ; $i <= 5 ; $i++) {
	for ($z = 2 + $r ; $z <= $x ; $z++) {
		echo "$z" ;
	}
	$r  ++ ;
	$x  ++ ;
	echo '<br>' ;
}
?>