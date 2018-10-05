<?php
namespace Fake\Directory\Dups;
use Fake\Directory\Pet\Animal;

class Dog extends Animal {
	public function __construct()
	{
		$this->name = 'Dup Doggie';
	}
}