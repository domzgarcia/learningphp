<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\Student;

class Senior extends Student {
	public function getType()
	{
		return 'Senior level';
	}
}