<?php 
// Inheritance, Overriding, Abstract, Interfaces
use Bluff\Directory\People\Student;
use Bluff\Directory\People\Junior;
use Bluff\Directory\People\Student;
use Bluff\Directory\People\Senior;
use Bluff\Directory\People\Person;
use Bluff\Directory\People\Leader;

function autoloader($classname){
	$lastSlash = strpos($classname,'\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$windowsResolver = str_replace('Directory', '', $directory);
	$filename  = __DIR__ . '' . $windowsResolver . '.php';
	require $filename;
}
spl_autoload_register('autoloader');

# Inheritance
// $student = new Student('Domz','Garcia');
// echo $student->sayHi();

# Abstract
$junior = new Junior('Eman','Custorio');
$senior = new Senior('Domz','Garcia');
$leader = new Leader('Michael','Yap');

function level(Student $student){
	return $student->teach() . ' to them.';
}

echo Bluff\Directory\People\Student::class;

echo '<pre>', var_dump(level($leader)) .'<br />', print_r($leader, 1);
