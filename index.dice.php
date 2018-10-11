<?php
$numberIwant = 1;
while(($dr = rand(1,6)) !== $numberIwant ){
	echo "You rolled a {$dr}, we need a {$numberIwant} \n";
}
echo "You rolled a {$dr}, we need a {$numberIwant} \n";