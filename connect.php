<?php
	$FullName = $_POST['FullName'];
	$CoffeeName = $_POST['CoffeeName'];
	$Addresss = $_POST['Addresss'];
	$Orderdetails= $_POST['Orderdetails'];
	$Whenwant= $_POST['Whenwant'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FullName, CoffeeName, Addresss, Orderdetails, Whenwant) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$FullName, $CoffeeName, $Addresss, $Orderdetails, $Whenwant);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>