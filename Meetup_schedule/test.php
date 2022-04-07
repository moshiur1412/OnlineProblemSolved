<?php 

$f = fopen('test.txt', 'w');

for ($i=1; $i <=100000; $i++) { 
	fwrite($f, $i."\n");
}
	fclose($f);
?> 
