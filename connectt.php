<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>FullName</th>
<th>CoffeeName</th>
<th>Addresss></Address></th>
<th>Orderdetails</th>
<th>Whenwant</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,FullName, CoffeeName ,Addresss, Orderdetails,Whenwant FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" 
		    . $row["FullName"] . "</td><td>"
            . $row["CoffeeName"] . "</td><td>"
            . $row["Addresss"] . "</td><td>"
            . $row["Orderdetails"] . "</td><td>"
            . $row["Whenwant"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>