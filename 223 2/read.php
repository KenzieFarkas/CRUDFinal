<?php
//read.php

require_once 'login.php'; //uses the info to access the database
$conn = new mysqli($host, $username, $password, $dbname);
if (!$conn) die("Unable to connect to MySQL: " . mysql_error());
	

	
$sql = "SELECT * FROM infromation WHERE lastname='" . $_POST['lastname'] . "'";
$result = $conn->query($sql);

$order_id = $row[0];
$leggingtype = $row[1];
$size = $row[2];
$color = $row[3];
$lastname = $row[4];
$firstname = $row[5];

// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
echo nl2br("<H2>Here is the orders for"." ". $_POST['lastname']."</H2>");
//$num_names = mysql_num_rows($roster_table);
if ($result->num_rows > 0)//will only do this if there is something to be returned from the aboe line
	{	echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
		echo "<TABLE><TR><TH>Last Name</TH><TH>Order information</TH><TH>Order Number</TH></TR>";
		// Iterate through all of the returned images, placing them in a table for easy viewing
	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>".$row['lastname']. "</TD><TD>". $row['leggingtype']. "</TD><TD>".$row['order_id'] ."</TD>";
			echo "</TR>";
		}
	echo "</TABLE>";
	echo"<br> Need to update an item? <form action= 'update_delete.php' method = 'get'>";
	echo "<input name = 'action'   type = 'submit' value = 'Yes'>";
	echo "<input name = 'action'   type = 'submit' value = 'No'>";
	echo "</FORM>";
	}
	else{
		echo "<br> 0 results";
		}
		echo '</body>';
    
?>