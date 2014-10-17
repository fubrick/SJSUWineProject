<!DOCTYPE html>
<html>
<body>

<?php
$con = mysqli_connect('localhost','root','cbr900','vinobly');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"vinobly");
$sql="SELECT * FROM wines";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Type</th>
<th>Photo</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['photo'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>