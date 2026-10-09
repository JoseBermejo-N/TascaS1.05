<?php

class Rectangle extends Shape {
   
    protected function getArea(): float {
        return $this->width * $this->height;
    }

    public function __toString(): string {

        return "Area of the rectangle: " . $this->getArea() . "\n";
    }
}


