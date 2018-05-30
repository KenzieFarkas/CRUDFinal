<?php
//read.php
require_once 'login.php';
$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	
$sql = "SELECT * FROM information WHERE lastname='" . $_POST['lastname'] . "'";
$result = $conn->query($sql);

$order_id = $row[0];
$leggingtype = $row[1];
$size = $row[2];
$color = $row[3];
$lastname = $row[4];
$firstname = $row[5];

// HTML to display the form on this page.
echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
echo nl2br("<H2>Here is the orders for"." ". $_POST['leggingtype']."</H2>");
//$num_names = mysql_num_rows($roster_table);
if ($result->num_rows > 0)//will only do this if there is something to be returned from the aboe line
	{	echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
		echo "<TABLE><TR><TH>Student ID</TH><TH>Student Name</TH><TH>Grade</TH></TR>";
		// Iterate through all of the returned images, placing them in a table for easy viewing
	while($row = $result->fetch_assoc())
		{
			// The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>".$row['studentID']. "</TD><TD>". $row['studentName']. "</TD><TD>".$row['year'] ."</TD>";
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