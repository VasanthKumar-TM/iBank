<?php

	$conn = mysqli_connect("localhost","root","vasanth@2000","sparks");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>