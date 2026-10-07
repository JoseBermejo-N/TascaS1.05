<?php

class Dog extends Animals {

    public function voiceAnimal(): string{
        return $this->getName() . " the dog says: Guau Guau";
    }

}