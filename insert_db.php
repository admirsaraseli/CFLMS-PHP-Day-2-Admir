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
    <div class="container container-fluid">
		<?php
			echo ("<html><body>");
			$servername = "localhost" ;
			$username = "root";
			$password = "";
			$dbname = "car_rental_agency";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if  (!$conn) {
			   die("Connection failed: " . mysqli_connect_error() . "\n" );
			}
			// Escape user inputs for security
			$available = mysqli_real_escape_string($conn, $_POST['available']);
			$brand = mysqli_real_escape_string($conn, $_POST[ 'brand']);
			$year = mysqli_real_escape_string($conn, $_POST['year']);
			$price = mysqli_real_escape_string($conn, $_POST['price']);
			$location = mysqli_real_escape_string($conn, $_POST['location']);
			$image = mysqli_real_escape_string($conn, $_POST['image']);
			// attempt insert query execution
			$sql = "INSERT INTO classic_cars (available, brand, year, price, image, location) 
			VALUES ('$available', '$brand', '$year', '$price', '$image', '$location')";
			if (mysqli_query($conn, $sql)) {
			    echo "<h1>New car created.<h1>";
			} else {
			    echo "<h1>Record creation error for: </h1>" .
			         "<p>"  . $sql . "</p>" .
			         mysqli_error($conn);
			}
			mysqli_close($conn);
			echo  "</body></html>";
		?>
    </div>
</body>
</html>