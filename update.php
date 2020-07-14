<?php
	$servername = "localhost";
	$username = "root";
	$password = "" ;
	$dbname = "car_rental_agency";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	   die("Connection failed: "  . mysqli_connect_error() . "\n");
	}
	// sql to update table
	$sql = "ALTER TABLE classic_cars CHANGE availability available BOOLEAN NOT NULL" ;

	if (mysqli_query($conn, $sql)) {
	   echo "Column updated successfully"  . "\n";
	} else {
	   echo  "Error updating: " . mysqli_error($conn) . "\n";
	}

?>