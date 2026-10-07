<?php

require_once 'Notification.php';
require_once 'Email.php';
require_once 'OrdinaryMail.php';
require_once 'Sms.php';


$email = new Email ("Testeando nueva cuenta de correo.");
$letter = new OrdinaryMail ("Queridos Reyes Magos...");
$sms = new Sms ("Envia GANAR al 31313.");


$email->sendBy();
$letter->sendBy();
$sms->sendBy();



