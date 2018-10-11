<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\Person;
use Bluff\Directory\People\LeaderInterface;
use Exception;

# not usual an abstract does an inheritance 'extends' to a class
# I just do this for the Leader class reference to Person class and make polymorphism.
# while Leader class is only extends to Student class
abstract class Student extends Person implements LeaderInterface {
	public function __construct($firstname = null, $lastname = null)
	{
		try {
			if(empty($firstname)){
				throw new Exception('Invalid arguments..F.', 1);
			} 
			if(empty($lastname)) {
				throw new Exception('Invalid arguments..L.', 1);	
			}
			parent::__construct($firstname, $lastname);		
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	public function sayHi(){
		return 'Overrides: ' . __FUNCTION__ . '() ,' . ' parent ' . parent::sayHi();
	}
	public function __toString()
	{
		return 'Person: ' . parent::__toString();
	}
	// abstract methods
	abstract public function getType();

	public function teach()
	{
		return parent::__toString() . ' is teaching';
	}
	public function enroll()
	{
		// ...
	}
	public function command(){
		return parent::__toString() . ' make command';
	}
}