<?php

require_once 'Animals.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Cow.php';

//creamos 3 objetos animales
$cat = new Cat("Rodolfo");
$dog = new Dog("Boby");
$cow = new Cow("Betsy");

//mostramos la onomatopeya de cada animal
echo $cat->voiceAnimal() . "\n";
echo $dog->voiceAnimal() . "\n";
echo $cow->voiceAnimal() . "\n";
