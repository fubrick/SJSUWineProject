<html>
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
	// echo "Mysql Connected Successfully\n";
}

$limit = 300;
$order_ascending = 'ASC';
$order_descending = 'DESC';

$query1 = 'SELECT * FROM wines ORDER BY name '.$order_descending.' LIMIT '.$limit;
$result = mysqli_query($conn, $query1);

if ($result->num_rows > 0)
{
	while($row = mysqli_fetch_array($result)) 
	{
		// $loc_row = 'xxx';
		// $loc_sec = 'xxx';
		$price = '0.00';
		$vintage = 'year';
		$location = 'location.jpg';

		$id = $row['id'];
		$photo = $row['photo'];
		$name = $row['name'];
		$type = $row['type'];
		$country = $row['country'];
		
		$query2 = "SELECT price FROM cellars WHERE wine_id = ".$id;
		$result2 = mysqli_query($conn, $query2);
		$row2 = mysqli_fetch_array($result2);
		if ($row2[0] != "")
		{
			$price = $row2[0];
		}

		$query3 = "SELECT vintage, location FROM inventory WHERE wine_id = ".$id;
		$result3 = mysqli_query($conn, $query3);
		$row3 = mysqli_fetch_array($result3);
		if ($row3[0] != "")
		{
			$vintage = $row3[0];
		}
		if ($row3[1] != "")
		{
			$location = $row3[1];
		}
		
		echo "<tr>\n";
			echo "<td class=\"produdctListCol_1\" align=\"center\">\n";
				echo "<a href=\"#\"><img src=\"$photo\"></a>\n";
				// echo "<p>".$photo."</p>";
			echo "</td>\n";

			echo "<td class=\"produdctListCol_2\" align=\"left\">\n";
				echo "<p>".$name.", <br>".ucwords($type)." from ".$country."</p>";
			echo "</td>\n";

			echo "<td class=\"produdctListCol_3\" align=\"left\">\n";
				echo "<p>".$vintage."</p>";
			echo "</td>\n";

			echo "<td class=\"produdctListCol_4\" align=\"right\">\n";
				// echo "<a href=\"#\"><img src=\"$location\"></a>\n";
				echo "<p>".$location."</p>";

				echo "<p>$".$price."&nbsp;</p>";
			echo "</td>\n";

		echo "</tr>\n";
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

<!--
	This is a kinda of pasteboard to keep any useful stuff which is ignored by web server

echo $row['id']."\t".$row['name']."\t".$row['type']."\t".$row['photo']."<br>\n";


#WINES#
PHOTO
NAME
TYPE from COUNTRY

#CELLARS#
$PRICE


<tr>
	<td class="produdctListCol_1" align="center">
		<a href="#"><img src="img/bottle1.jpg"></a>
	</td>
	<td class="productListCol_2" align="left">
		<p>Louis Latour Marsannay, <br>Pinot Noir from France</p>
	</td>
	<td class="productListCol_3" align="left">
		<p>2013</p>
	</td>
	<td class="productListCol_4" align="right">
		<p>Row: 1<br>Sec: A</p>
		<p>$47.98</p>
	</td>
</tr>

--!>