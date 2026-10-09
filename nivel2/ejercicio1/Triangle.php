<?php

class Triangle extends Shape {

    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
   
    protected function getArea(): float {
        return ($this->width * $this->height) / 2;
    }

    public function __toString(): string {
        return "Area of the triangle: " . $this->getArea() . "\n";
    }
}
