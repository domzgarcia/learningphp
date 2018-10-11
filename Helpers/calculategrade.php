<?php
namespace Bluff\Directory\Helpers;

trait CalculateGrade {
	private static $average;
	public function getAverage(){
		$gradesLength = func_num_args();
	    $arg_list = func_get_args();
	    $perItems = 10 * $gradesLength;
	    $temp = 0;
	    for ($i = 0; $i < $gradesLength; $i++) {
	    	$temp += $arg_list[$i];
	    }
	    self::$average = $temp * 100 / $perItems;
	    return self::$average;
	}
	public function same(){
		return ' ' . __FUNCTION__ . '() from CalculateGrade Class';
	}
}
