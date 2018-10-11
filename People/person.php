<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\Helpers\CalculateGrade;
use Bluff\Directory\Helpers\ConflictTrait;
use Exception;

class Person {

	use CalculateGrade, ConflictTrait {
		CalculateGrade::same insteadof ConflictTrait;
		ConflictTrait::same as thesame;
	}
	protected $firstname;
	protected $surname;
	public function __construct($firstname, $surname)
	{	
		$this->firstname = $firstname;
		$this->surname = $surname;
	}
	public function getFirstname()
	{
		return $this->firstname;
	}
	public function getSurname()
	{
		return $this->surname;
	}
	public function sayHi(){
		return 'Hi ' . $this->firstname . ' there! ' . __FUNCTION__ . '()';
	}  
	public function __toString()
	{
		return $this->firstname . ' ' . $this->surname;
	}
	public function calcGradeAverage($args)
	{
		return $this->getAverage(...$args);
	}
}

