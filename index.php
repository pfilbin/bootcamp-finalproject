<?php
	$dbhost = 'bootcamp.coqxothtgwj0.us-west-2.rds.amazonaws.com';
	$dbuser = 'pfilbin';
	$dbpass = 'kibocommerce';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect to instance: ' . mysqli_error($conn));
	}
	echo 'Connected to MySQL Successfully!';
	echo 'Your IP Address is: $_SERVER["REMOTE_ADDR"]';

	$result = mysqli_query($con,"SELECT * FROM Messages");

	echo "<table border='1'>
	<tr>
	<th>MSGID</th>
	<th>Message</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['MSGID'] . "</td>";
	echo "<td>" . $row['Message'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";

	mysql_close($conn);
?>

