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
	// sql to create table
	/*$sql = "CREATE TABLE classic_cars (
	cls_cars_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	available BOOLEAN NOT NULL,
	brand VARCHAR(20) NOT NULL,
	year INT NOT NULL,
	price FLOAT(5),
	image VARCHAR(100),
	reg_date TIMESTAMP
	)" ;

	if (mysqli_query($conn, $sql)) {
	   echo "Table Users created successfully"  . "\n";
	} else {
	   echo  "Error creating table: " . mysqli_error($conn) . "\n";
	}*/


	$sql = "INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Bugatti', 1940, 600, 'bugatti.jpg', 'Vienna');
	INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Rolls', 1928, 700, 'rolls.jpg', 'Vienna');
	INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Mercedes', 1930, 500, 'mercedes.jpg', 'Vienna');
	INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Bmw', 1960, 300, 'bmw.jpg', 'Vienna');
	INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Porsche', 1959, 300, 'porsche.jpg', 'Vienna');
	INSERT INTO classic_cars (available, brand, year, price, image, location)
	VALUES (1, 'Ferrari', 1959, 400, 'ferrari.jpg', 'Vienna');
	";
	if (mysqli_multi_query($conn, $sql)) {
	    echo "New record created.\n";
	} else {
	   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>