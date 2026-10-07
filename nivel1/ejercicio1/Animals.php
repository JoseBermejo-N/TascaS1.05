<?php


abstract class Animals {

    protected $name;

    //definimos el constructor de la clase abstracta
    public function __construct ($name){
        $this->name = $name;
    }

    //definimos un metodo comun que nos devolvera el nombre del animal
    public function getName(): string{
        return $this->name;
    }


    //definimos el metodo abstracto que sera implementado en las clases hijas
    abstract public function voiceAnimal(): string;

}

