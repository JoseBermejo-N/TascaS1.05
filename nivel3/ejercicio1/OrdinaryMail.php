<?php


class OrdinaryMail extends Notification {

//implementamos clase abstracta "sendBy"

public function sendBy():void {
    echo $this->message . " (sent by ordinary mail)\n";
}

}