<?php

require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';


//creamos un objeto triangulo y un objeto rectángulo
$triangle = new Triangle(3, 10);
$rectangle = new Rectangle(5, 12);

//mostramos el área de cada figura
$triangle->showArea();
$rectangle->showArea();



