<!DOCTYPE html>
<html>
<head>
	<title>Car Rental agency</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Car Rental</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="insertcar.php">Insert Car</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
        </li>
        </ul>
    </div>
    </nav>
    <header>
        <div class="jumbotron main_header" >
            <h1 class="display-4">Car Rental agency</h1>
            <p class="lead">Enjoy your ride.</p>
        </div>
    </header>
    <div class="container row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto">
    <?php
		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$dbname     = "car_rental_agency";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		   die("Connection failed: " . mysqli_connect_error() . "\n");
		}
		$sql = "SELECT * FROM classic_cars";
		$result = mysqli_query($conn, $sql);
		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {
			$available =  $row["available"];
            $brand =  $row["brand"];
            $price =  $row["price"];
            $image =  $row["image"];
            $year = $row["year"];
            $location = $row["location"];

	?>
	<div class="col mb-4 ">
		<div class="card px-1 py-1 bg-light" >
			<img src="img/<?= $image?>" class="card-img-top" alt="..." style="height: 30vh"	>
			<div class="card-body">
				<h4 class="card-title"><?php 
				if ($available == 0) {
                        echo "<b>available:</b> " . "<span style='color:red'>No</span>";
                    } else {
                        echo "<b>available:</b> " . "<span style='color:green'>Yes</span>";
                    } 
                    ?></h4>
				<h4 class="card-text">Brand: <?= $brand?>, <span  ></span></h4>
				<h4 class = "card-text text-info">Price: <?= $price?></h4>
				<h5 class="card-text">Year: <?= $year?></h5>
			</div>
			<div class="card-footer text-center">
				<span class="">
					<h5>Location: <?= $location?></h5>
				</span>
				<a href="deletecar.php?id=<?= $row['cls_cars_id'];?>" class="btn btn-outline-info btn-block">Delete the car</a>
			</div>
		</div>
	</div>	
	<?php	
		}
		
		// Free result set
		mysqli_free_result($result);
		// Close connection
		mysqli_close($conn);
	?>
	
	</div>
</body>
</html>