<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: center;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$mysqli = new mysqli("localhost", "root", "", "anggotadewan");

// Check connection
if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
mysqli_select_db($mysqli, "anggotadewan");
$sql = "SELECT * FROM person_5025201118 WHERE id='".$q."'";
$result= mysqli_query($mysqli, $sql);
echo "<table>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Firstname'] . "</td>";
  echo "<td>" . $row['Lastname'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($mysqli);
?>
</body>
</html>