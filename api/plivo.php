<?php

require_once ("../includes/config.php");

//Token for security so you don't get spammed
$token = $_GET['token'];

//GET the 'from number', 'type of message', 'message content', sending to 'number'
$sentfrom = $_GET['From'];
$type = $_GET['Type'];
$message = $_GET['Text'];
$sentto = $_GET['To'];

if ($token == $uniquetoken) {
	if (!empty($message)) {
	/* Insert incoming messages */
		DB::insert('messages', array(
		  'type' => $type,
		  'sentfrom' => $sentfrom,
		  'sentto' => $sentto,
		  'message' => $message,
		));
	} else {
		echo 'Empty message not accepted.';
	}
} else {
	echo 'Wrong token!';
}