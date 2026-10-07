<?php


class Sms extends Notification {

//implementamos clase abstracta "sendBy"

public function sendBy():void {
    echo $this->message . " (sent by SMS)\n";
}

}