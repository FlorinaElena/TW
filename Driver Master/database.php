<?php

$db_host = 'fenrir';
$db_name = 'question1';
$db_user = 'question1';
$db_pass = 'phd3Vx3TuW';

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
