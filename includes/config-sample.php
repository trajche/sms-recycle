<?php

//Including stuff we need
require_once('meekrodb.2.3.class.php');
require_once('functions.php');

//Your database information
DB::$user = '';
DB::$password = '';
DB::$dbName = '';

//Enter a unique string for your token
$uniquetoken = 'examplestring123123complex';

//Your phone number info
$numbers = array(
	'+32 466 90 02 78' => array('countrycode' => 'BE', 'source' => 'Plivo'),
	'+46 76 692 00 61' => array('countrycode' => 'SE', 'source' => 'Plivo'),
);