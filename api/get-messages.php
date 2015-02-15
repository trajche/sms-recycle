<?php
require('../includes/config.php');

$phonenr = $_GET['phone'];

//Check if phone number exists in db
if (seccheck($numbers, $phonenr) != true) {
	echo 'What are you doing? ';
	echo 'Shutting down...';
	exit;
};

$results = DB::query("SELECT * FROM messages WHERE sentto=%i", $phonenr);

if ($results != null) {
foreach ($results as $row) { ?>

	<li class="message">
		<strong>Sent from: <?php echo $row['sentfrom']; ?></strong>
		<em><?php echo $row['time']; ?></em>
		<p><?php echo $row['message']; ?></p>
	</li>

<?php } } else { ?> 

	<p>This number has not received any messages yet. </p>

<?php }