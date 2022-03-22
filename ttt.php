<?php
$FullName = filter_input(INPUT_POST, 'FullName');
$CoffeeName = filter_input(INPUT_POST, 'CoffeeName');
$Addresss = filter_input(INPUT_POST, 'Addresss');
$Orderdetails = filter_input(INPUT_POST, 'Orderdetails');

if (!empty($FullName)){
if (!empty($CoffeeName)){

if (!empty($Addresss)){
if (!empty($Orderdetails)){

$host = "localhost";
$dbFullName="root";
$dbCoffeeName = "";
$dbAddresss = "";
$dbOrderdetails = "";
$dbname = "test";
// Create connection
$conn = new mysqli ($host, $dbFullName, $dbCoffeeName, $Addresss, $Orderdetails, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (FullName, CoffeeName, Addresss, Orderdetails)
values ('$FullName','$CoffeeName',$Addresss, $Orderdetails)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>