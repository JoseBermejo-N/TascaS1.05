<?php


class Circle extends Shape {

    protected float $radius;
    private const PI = 3.14159 ;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    protected function getArea(): float {
        return self::PI * ($this->radius ** 2);
    }

    public function __toString(): string {
        return "Area of the circle: " . $this->getArea() . "\n";
    }

}