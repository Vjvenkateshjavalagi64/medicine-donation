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
<br><br>
<br><br>
<br><br>
<table>
<tr>
<th>Medicine Name</th>
<th>Medicine Quantity</th>
<th>Expiry Date</th>
<th>Location</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ipfinal");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Mname,Mquantity,Mdate,MLoaction FROM mdonte";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Mname"]. "</td><td>" . $row["Mquantity"] . "</td><td>".$row["Mdate"]. "</td><td>" . $row["MLoaction"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<style>
body {
  background-color:lightblue; 
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</body>
</html>