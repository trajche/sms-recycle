<?php

require_once ("../includes/config.php");

//Token for security shit.. so filip doesnt spam me
//$token = $_GET['token'];

//Sent from number
$sentfrom = $_POST['from'];

//Type of message
$type = "text";

//Text message
$message = $_POST['message'];

//Number text message is being sent to
$sentto = $_POST['to'];

//Date which this shit is recived (dont use.. use timestamp in DB)
$receivedate = date("Y-m-d H:i:s");

if (!empty($message)) {
/* Insert incoming messages */
	$sql = "INSERT INTO messages (type, sentfrom, sentto, message) VALUES('".$type."', '".$sentfrom."', '".$sentto."', '".$message."') "; 
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error " . $sql . "<br>" . $conn->error;
}
