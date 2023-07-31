<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse:separate;
width: 100%;
color:black;
font-family: monospace;
font-size: 25px;
text-align:center;
}
th {
background-color:steelblue;
color: white;
}
tr:nth-child(even) {background-color:aliceblue}
</style>
</head>
<body>
<table>
<tr>
<th>NGO Name</th>
<th>Contact no</th>
<th>Email id</th>
<th>Location</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ipfinal");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ngoName,Contact,Email,Location FROM ngodb";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ngoName"]. "</td><td>" . $row["Contact"] . "</td><td>".$row["Email"]. "</td><td>" . $row["Location"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>