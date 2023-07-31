<!DOCTYPE html>
<html>
<head>
<style>
  
body {
  background-color:lightblue; 
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
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

<div>
        <a href="admininfo.php">
    <input type="button" value="Admin home page"  ></a>
    </div>
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