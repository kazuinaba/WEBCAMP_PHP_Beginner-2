<?php
function myFunc(int $i){
	$i *= 2;

	echo "in myFunc, i is {$i} \n";

}

$i = 10;
myFunc($i);
echo "myFunc, i = {$i}";

