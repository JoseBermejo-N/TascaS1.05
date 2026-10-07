<?php

abstract class Notification {

    public string $message;



public function __construct(string $message){

    $this->message = $message;

}

abstract public function sendBy():void;

}

