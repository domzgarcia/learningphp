<?php 
function dd($data, $withDetails = false){
	echo '<pre>', ($withDetails) 
	? var_dump($data)
	: print_r($data, 1) . '</pre>';
	die();
}