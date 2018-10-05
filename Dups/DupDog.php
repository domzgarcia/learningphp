<?php
namespace Fake\Directory\Dups;
use Fake\Directory\Pet\Animal;

class DupDog extends Animal {
	public function __construct()
	{
		$this->name = 'Dup Doggie';
	}
}