<?php 
namespace Fake\Directory\Pet;
use Fake\Directory\Pet\Animal;

class Cat extends Animal {
	public function __construct()
	{
		$this->name = 'Mingming';
	}
}