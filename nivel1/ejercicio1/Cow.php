<?php

class Cow extends Animals {
    
    public function voiceAnimal(): string{
        return $this->getName() . " the cow says: Muuuuu";
    }

}