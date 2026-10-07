<?php

class Rectangle extends Shape {
   
    protected function calculateArea(): float {
        return $this->width * $this->height;
    }

    public function showArea(): void {
        echo "Area of the rectangle: " . $this->calculateArea() . "\n";
    }
}
