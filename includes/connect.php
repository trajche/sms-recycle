<?php
$user_name = "smsrecyc_user";
$password = '=w-7KE5lnZS4';
$database = "smsrecyc_db";
$server = "localhost";

$conn = new mysqli($server, $user_name, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>