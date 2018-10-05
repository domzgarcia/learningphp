<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\Student;

class Junior extends Student {
	public function getType()
	{
		return 'Junior level';
	}
}