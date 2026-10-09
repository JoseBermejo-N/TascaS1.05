<?php

class Dog extends Animal {

    public function makeSound(): string{
        return $this->getName() . " the dog says: Guau Guau";
    }

}