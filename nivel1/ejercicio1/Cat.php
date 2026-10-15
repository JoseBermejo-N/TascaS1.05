<?php

class Cat extends Animal {

    public function makeSound(): string{
        return $this->getName() . " the cat says: Miau";

    }

}