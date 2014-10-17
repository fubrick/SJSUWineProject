<?php

$host="localhost"; // Host name.
$db_user="root"; // MySQL username.
$db_password="cbr900"; // MySQL password.
$database="vinobly"; // Database name.

$conn = mysqli_connect($host,$db_user,$db_password,$database);
if (!$conn) 
{
	die('Could not connect: ' . mysql_error());
}
else
{
	echo "Mysql Connected Successfully\n";
}

$result = mysqli_query($conn,"SELECT * FROM WINES");
while($row = mysqli_fetch_array($result)) 
{
  	echo $row['id']."\t".$row['name']."\t".$row['type']."\t".$row['photo']."<br>\n";
}

mysqli_close($conn);

?>
