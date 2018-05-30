<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "mfarkas";
    $mysql_password = "mackenzie";
    $mysql_database = "lululemon";
	
	//delcare PHP variables
	
	$lastname = $_POST["lastname"];
	$firstname = $_POST["firstname"];
	$leggingtype = $_POST["leggingtype"];
	$size = $_POST["size_id"];
	$color = $_POST["color_id"];
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO infromation (lastname, firstname, leggingtype, size_id, color_id) VALUES(?, ?, ?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('sssss', $lastname, $firstname, $leggingtype, $size, $color); //bind value
		if($statement->execute())
			{
				//print output text
			echo ("Hello ". $lastname. "! We are so glad you ordered ". $leggingtype. " In the color ". $color ." and size " . $size);
			//echo 'Hi';
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}

         }
else{
    echo ("error");
    }         
?>