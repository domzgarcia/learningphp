<?php
include 'Helpers/dumper.php';
echo 'Hello World';




















# CSRF
# https://www.youtube.com/watch?v=U4LDsxSzZeI
# https://www.youtube.com/watch?v=GUYV0hbsDHE&list=PLfdtiltiRHWHjTPiFDRdTOPtSyYfz3iLW&index=24
# https://youtu.be/w9z0b4GhhOs

# functions
// function add(){
// 	$args = func_get_args();
// 	dd($args);
// }
// add(1,2,'three');
// add([1],[1,2],[1,2,3]);

# function use can only work on assigned function
// $suffix = 'Awesome';
// $greet = function($fn, $ln) use ($suffix){
// 	echo "{$fn} {$ln} {$suffix}";
// };
// echo $greet('domz','garcia');

# continue;
// $users = [
// 	[
// 		'username' => 'domz',
// 		'likes' => ['code', 'game']
// 	],
// 	[
// 		'username' => 'garcia',
// 		'likes' => ['food', 'sports']
// 	],
// ];
// foreach($users as $user){
// 	foreach($user['likes'] as $activity){
// 		if($activity === 'sports'){
// 			continue;
// 		}
// 		echo $activity;
// 	}
// }

# break;
// $items = [
// 	['key' => 1],
// 	['key' => 2]
// ];
// foreach( $items as $item){
// 	if($item['key'] === 1){
// 		echo 'Blah';
// 		break;
// 	}
// }

# while()
// $numberIwant = 4;
// while( ($diceRoll = rand(1,6) ) !== $numberIwant ){
// 	echo "You rolled a {$diceRoll}, we need a {$numberIwant} \n";
// }
// echo "Finally, we got {$diceRoll}, we need a {$numberIwant} \n";

