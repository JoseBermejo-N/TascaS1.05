<?php

class Triangle extends Shape {


    protected function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }

    public function showArea(): void {
        echo "Area of the triangle: " . $this->calculateArea() . "\n";
    }
}
