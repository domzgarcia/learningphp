<?php 
namespace Fake\Directory\Pet;

interface IAnimal {
	public function setSound($sound);
	public function getSound();
}

class Animal implements IAnimal {
	protected static $sound;
	protected $type;
	protected $name;

	public function __construct()
	{
		static::$sound = 'Default sound';
	}
	public function setSound($sound)
	{
		self::$sound = $sound;	
	}
	public function getSound()
	{
		return self::$sound;
	}
	public static function mySound()
	{
		return static::$sound;
	}
}