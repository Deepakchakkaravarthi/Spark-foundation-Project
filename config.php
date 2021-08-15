<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "union_bank";
	// Create a database connection
	$conn = mysqli_connect($server, $username, $password, $database);
	//$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>