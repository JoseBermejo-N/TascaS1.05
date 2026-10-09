<?php

require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Cow.php';

//creamos 3 objetos animales
$cat = new Cat("Rodolfo");
$dog = new Dog("Boby");
$cow = new Cow("Betsy");

//mostramos la onomatopeya de cada animal
echo $cat->makeSound() . "\n";
echo $dog->makeSound() . "\n";
echo $cow->makeSound() . "\n";
