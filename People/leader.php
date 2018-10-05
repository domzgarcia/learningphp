<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\StudentInterface;
use Bluff\Directory\People\Student;

class Leader extends Student {
	public function getType()
	{
		return 'Leader level';
	}
}