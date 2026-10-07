<?php


class Circle extends Shape {

    //creamos nuevos atributo 
    protected float $radius;
    private const PI = 3.14159 ;


    //sobreesquibimos constructor 
    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    protected function calculateArea(): float {
        return self::PI * ($this->radius ** 2);
    }

    public function showArea(): void {
        echo "Area of the circle: " . $this->calculateArea() . "\n";
    }
    


}