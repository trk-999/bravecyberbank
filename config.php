<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cyberbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("We cannot connect to the database due to this following error --> ".mysqli_connect_error());
	}

?>