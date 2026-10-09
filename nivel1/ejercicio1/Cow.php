<?php

class Cow extends Animal {
    
    public function makeSound(): string{
        return $this->getName() . " the cow says: Muuuuu";
    }

}