<?php 
use Fake\Directory\Pet\Cat;
use Fake\Directory\Pet\Dog;
use Fake\Directory\Dups\Dog as DupDog;

require_once __DIR__ . '/Pet/Animal.php';
require_once __DIR__ . '/Pet/Cat.php';
require_once __DIR__ . '/Pet/Dog.php';
require_once __DIR__ . '/Dups/DupDog.php';

$cat = new Cat();
$cat->setSound('Meow');
echo $cat->getSound() . ' ';

$dog = new Dog();
$dog->setSound('Awow');
echo $dog->getSound() . ' ';

$dupdog = new DupDog();
$dupdog->setSound('Grrr');
echo $dupdog->getSound();

echo '<pre>', print_r($dog, 1);
echo '<pre>', print_r($cat, 1);
echo '<pre>', print_r($dupdog, 1);