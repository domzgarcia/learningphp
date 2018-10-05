<?php
namespace Fake\Directory\Pet;
use Fake\Directory\Pet\Animal;

class Dog extends Animal {
	public function __construct()
	{
		$this->name = 'Doggie';
	}
}