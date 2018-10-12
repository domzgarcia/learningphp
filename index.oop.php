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

/*
echo '<pre>' # , var_dump(level($leader)) 
.'<br />' # ; echo checkAverage($leader) 
. '%'
.'<br />', print_r($leader, 1);
*/

# require 'imports/fileImported.php';
# include 'imports/fileImported.php';






# Exceptions
# ----------
// https://sinonjs.org/

# OOP 1
// https://www.udemy.com/php-oop-tutorial/learn/v4/t/lecture/9623818?start=0

# OOP 2
// https://www.udemy.com/complete-object-oriented-programming-in-php-start-to-finish/learn/v4/t/lecture/4078764?start=0

# PHP BASICS (INDIANO)
// https://www.udemy.com/draft/277868/learn/v4/t/lecture/2187164?start=0
// https://www.udemy.com/draft/277868/learn/v4/t/lecture/2187164?start=30

# CODING WITH TABA
// https://www.youtube.com/watch?v=8MksjpfDvRw

# MYSQL
# https://www.udemy.com/learn-database-design-with-mysql/learn/v4/t/lecture/981228?start=0

# Reflection Class
// https://www.youtube.com/watch?v=3uaPBYG4eeQ&list=PLfdtiltiRHWG0__5Jb1HDaDgt2PeYjvU6

# Work ka dito bukas
# https://www.youtube.com/watch?v=e4v_Zd5axoU&index=33&list=PLfdtiltiRHWHjTPiFDRdTOPtSyYfz3iLW