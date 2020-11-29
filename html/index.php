<?php
$hostname = 'mysql';
$username = 'sample';
$password = 'sample';

$conn = new mysqli($hostname, $username, $password);

if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

echo "Connection to the database established!";
?>

<h3>Welcome to the test LAMP server!</h3>
