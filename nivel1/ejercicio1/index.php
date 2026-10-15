<?php

require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Cow.php';

$cat = new Cat("Rodolfo");
$dog = new Dog("Boby");
$cow = new Cow("Betsy");

echo $cat->makeSound() . "\n";
echo $dog->makeSound() . "\n";
echo $cow->makeSound() . "\n";
