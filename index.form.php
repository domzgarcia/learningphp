<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Sample</title>
</head>
<body>
	<h1>Form</h1>
	<hr />
	<form action="Form/name.php" method="post">
		<label for="name">Your name</label>
		<input type="text" name="name" id="id">
		<button type="submit">Greet me</button>
	</form>
</body>
</html>



















<?php
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
?>
