<?php
$fullname = $_REQUEST['fullname'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$message = "$fullname $date $time $phone $email\r\n";

$reservations = fopen('reservations.txt', 'a');
fwrite($reservations, $message);
fclose($reservations);
?>