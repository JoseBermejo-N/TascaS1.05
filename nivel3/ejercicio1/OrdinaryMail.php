<?php


class OrdinaryMail extends Notification {



public function sendBy():void {
    echo $this->message . " (sent by ordinary mail)\n";
}

}