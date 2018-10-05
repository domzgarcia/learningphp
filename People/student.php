<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\Person;

abstract class Student extends Person {
	public function __construct($firstname, $lastname)
	{
		parent::__construct($firstname, $lastname);
	}
	public function sayHi(){
		return 'Overrides: ' . __FUNCTION__ . '() ,' . ' parent ' . parent::sayHi();
	}
	public function __toString()
	{
		return 'Person: ' . parent::__toString();
	}
	// abstract methods
	abstract public function enroll();
	abstract public function getType();
}