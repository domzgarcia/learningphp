<?php 
# Inheritance, Overriding, Abstract, Interfaces
use Bluff\Directory\People\Junior;
use Bluff\Directory\People\Student;
use Bluff\Directory\People\Senior;
use Bluff\Directory\People\Person;
use Bluff\Directory\People\Leader;
# Traits
use Bluff\Directory\Helpers\CalculateGrade;
use Bluff\Directory\Helpers\ConflictTrait;

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
// echo Bluff\Directory\People\Student::class;

# Abstract
// $junior = new Junior('Eman','Custorio');
// $senior = new Senior('Domz','Garcia');
$leader = new Leader('M','F');

# mixing
function level(Student $student){
	return $student->teach() . ' to them.';
}
function checkAverage(Student $student){
	return $student->calcGradeAverage([2, 4, 6, 8, 10]); # quiz item by 10
}
# use conflict trait
echo $leader->thesame();
# debug
eCho '<pre>' # , var_dump(level($leader)) 
.'<br />' # ; echo checkAverage($leader) 
. '%'
.'<br />', print_r($leader, 1);



# Exceptions
# ----------
# https://www.udemy.com/php-oop-tutorial/learn/v4/t/lecture/9623818?start=0
# https://sinonjs.org/
# https://www.udemy.com/complete-object-oriented-programming-in-php-start-to-finish/learn/v4/t/lecture/4078764?start=0
# https://www.udemy.com/draft/277868/learn/v4/t/lecture/2187164?start=0
# Reflection Class

