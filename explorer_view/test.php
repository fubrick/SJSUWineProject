<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTML CODE FOR WEBSITE TEMPLATE</title>
</head>

<body>
<?php

$host = 'localhost';
$port = 8889;
$user = 'root';
$password = 'root';
$database = 'vinobly';

$conn = mysqli_connect($host, $user, $password, $database, $port);
if (!$conn) 
{
	die('Could not connect: '.mysql_error());
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
</body>

</html>
