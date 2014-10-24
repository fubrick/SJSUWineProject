<html>
<body>

<?php
$table = $_POST["table"];
$fields = $_POST["fields"];
$orderBy = $_POST["orderBy"];
$limit = $_POST["limit"];
?>

Table: <?php echo $table; ?><br>
Fields: <?php echo $fields; ?><br>
Order By: <?php echo $orderBy; ?><br>
Limit: <?php echo $limit; ?><br><br>

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
	echo "Mysql Connected Successfully\n<br>";
}
?>

<br>

<?php

$query = 'SELECT '.$fields.' FROM '.$table;

if($orderBy != "")
{
	$query .= ' ORDER BY '.$orderBy;
}

if($limit != "")
{
	$query .= ' LIMIT '.$limit;
}

$result = mysqli_query($conn, $query);
$numCols = mysql_num_fields($result);
if ($result->num_rows > 0)
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$line = '';
		
     	foreach ($row as $i => $colVal) 
		{
			if(strlen($line) > 0)
			{
				$line .= "\t|\t";
			}

    		$line .= $colVal;
		}
		
		echo $line."<br>\n";
	}
}
else
{
	echo "<h1 align=\"center\">*** Nothing Found!! ***</h1>";
}

mysqli_close($conn);
?>

</body>
</html>
