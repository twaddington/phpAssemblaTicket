<?php

require_once('assembla.plugin');

$key = '...'; //this is your assembla space id
$username = '...'; //this is an assembla user account name
$password = '...'; //this is the password for the above user

$A = new Assembla($key, $username, $password);
//$tickets = $A->listTickets();

$result = $A->createTicket(array(
	'priority' => 3,
	'status' => 0,
	'summary' => 'test ticket',
	'description' => 'here is a description'
));

print_r($result);

?>