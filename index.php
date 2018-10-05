<?php 
use Fake\Directory\Pet\Cat;
use Fake\Directory\Pet\Dog;
use Fake\Directory\Dups\DupDog;

function autoloader($classname){
	$lastSlash = strpos($classname,'\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$resolveDirectory = str_replace('Directory', '', $directory);
	$filename  = __DIR__ . '' . $resolveDirectory . '.php';
	require_once $filename;
}
spl_autoload_register('autoloader');

$cat = new Cat();
$cat->setSound('Meow');
echo $cat->getSound() . ', ';

$dog = new Dog();
$dog->setSound('Awow');
echo $dog->getSound() . ', ';

$dupdog = new DupDog();
$dupdog->setSound('Grrr');
echo $dupdog->getSound();

echo '<pre>', print_r($dog, 1);
echo '<pre>', print_r($cat, 1);
echo '<pre>', print_r($dupdog, 1);