<?php


class Sms extends Notification {



public function sendBy():void {
    echo $this->message . " (sent by SMS)\n";
}

}