<?php

class Cat extends Animal {

    //implementamos el metodo que nos devolvera el sonido del animal
    public function makeSound(): string{
        return $this->getName() . " the cat says: Miau";

    }

}