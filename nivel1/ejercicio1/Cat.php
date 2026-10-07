<?php

class Cat extends Animals {

    //implementamos el metodo que nos devolvera el sonido del animal
    public function voiceAnimal(): string{
        return $this->getName() . " the cat says: Miau";

    }

}