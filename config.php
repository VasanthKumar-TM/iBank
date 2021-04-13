<?php

	$conn = mysqli_connect("localhost","id16577714_vasanth","#SmhSQir|52PGZJS","id16577714_ibank");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>