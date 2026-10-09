<?php


class Email extends Notification {



public function sendBy():void {
    echo $this->message . " (sent by Email)\n";
}

}