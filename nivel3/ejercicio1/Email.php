<?php


class Email extends Notification {

//implementamos clase abstracta "sendBy"

public function sendBy():void {
    echo $this->message . " (sent by Email)\n";
}

}