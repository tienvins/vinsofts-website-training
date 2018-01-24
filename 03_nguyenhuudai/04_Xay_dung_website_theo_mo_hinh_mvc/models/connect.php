<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="db22_web_trainning";
	// Create connection
	$conn = mysqli_connect($servername,$username,$password,$db);

	// Check connection
	if (!$conn) {
	    die ("Connect failed!");
	}
	else{
		mysqli_set_charset($conn,'utf8');
	} 
?>