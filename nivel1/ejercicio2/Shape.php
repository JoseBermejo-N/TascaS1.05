<?php

abstract class Shape {

    protected $width;
    protected $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    
    abstract protected function calculateArea(): float;

    
    abstract public function showArea(): void;
    }