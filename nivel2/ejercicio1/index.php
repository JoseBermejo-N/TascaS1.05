<?php

require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';


$triangle = new Triangle(3, 10);
$rectangle = new Rectangle(5, 12);
$circle = new Circle(6);


$triangle->showArea();
$rectangle->showArea();
$circle->showArea();



