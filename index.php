<?php
$servername = "er7lx9km02rjyf3n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "rs0czd6o8w8e8r3j";
$password = "w1ffboir25orrcs4";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 


<?
/*
The credit card authorization system runs as a RESTful webservice on host blitz.cs.niu.edu.
The URL "http://blitz.cs.niu.edu/CreditCard/" accepts http POST requests that contain parameters in JSON format:
credit card number, expiration date, amount, name of card holder, vendor id, transaction id.
The vendor and transaction ids must be unique. After successful processing it will respond with an authorization number.
If any error is detected, the response will start with the word "Error" followed by one or more error messages.
Here is an example PHP program that sends an authorization request:

$url = 'http://blitz.cs.niu.edu/CreditCard/';
$data = array(
	'vendor' => 'VE001-99',
	'trans' => '907-987654321-296',
	'cc' => '6011 1234 4321 1234',
	'name' => 'John Doe', 
	'exp' => '12/2020', 
	'amount' => '654.32');

$options = array(
    'http' => array(
        'header' => array('Content-type: application/json', 'Accept: application/json'),
        'method' => 'POST',
        'content'=> json_encode($data)
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo($result);
*/
?>
