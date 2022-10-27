<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$tablename = 'first';

$conn = new mysqli($servername, $dbusername, $dbpassword, $tablename);

if(!$conn){
	die('Databasbe Connection Error');
}



?>