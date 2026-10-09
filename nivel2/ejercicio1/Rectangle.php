<?php

class Rectangle extends Shape {

    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
   
    protected function getArea(): float {
        return $this->width * $this->height;
    }

    public function __toString(): string {

        return "Area of the rectangle: " . $this->getArea() . "\n";
    }
}
