<!DOCTYPE html>
<html>
<head>
	<title>Php day 2</title>
	<?php 
		# exercise 1
		$viewer = getenv( "HTTP_USER_AGENT" );
		$browser = "An unidentified browser";
		if( preg_match( "/MSIE/i", "$viewer" ) )
		{
		echo '<link rel="stylesheet" type="text/css" href="explorer.css">';
		}
		elseif(preg_match('/Chrome/i' , "$viewer"))
		{
		echo '<link rel="stylesheet" type="text/css" href="chrome.css">';
		}
		elseif( preg_match( "/Mozilla/i", "$viewer" ))
		{
		echo '<link rel="stylesheet" type="text/css" href="mozilla.css">';
		}	

 	?>
</head>
<body>
	<form action="index.php" method ="POST">
		Name: <input type="text"  name="name" />
		Surname: <input type="text"  name="surname" />
		Age: <input type ="text" name="age" />
		<input  type="submit" name="submit"  />
	</form>
	<?php
		# exercise 2
		if( isset($_POST['submit']))
		{
		if( $_POST["name" ] && $_POST["surname"] && $_POST["age"] )
		{
		echo "Welcome ". $_POST[ 'name'].$_POST[ 'surname']. "<br />";
		echo "You are " . $_POST['age']. " years old.";
		}
		else 
		{
			echo "Please insert all data.";
		}
		}

		# exercise 3
		echo "<br><br>";
		function addFunction($num1, $num2)
		{
		$result = $num1 / $num2;
		echo  "Result of the two numbers is : $result";
		}
		addFunction(20, 10);
	?>
</body>
</html>










