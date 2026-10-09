<?php

class Triangle extends Shape {


    protected function getArea(): float {
        return ($this->width * $this->height) / 2;
    }

    public function __toString(): string {
        return "Area of the triangle: " . $this->getArea() . "\n";
    }
}
