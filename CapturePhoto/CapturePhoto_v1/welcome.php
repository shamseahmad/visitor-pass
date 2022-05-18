<?php
	$Name_1 = $_POST['Name_1'];
	$Phone_no = $_POST['Phone_no'];
	$address = $_POST['address'];
	$nameOfPersonToMeet = $_POST['nameOfPersonToMeet'];
	$Department = $_POST['Department'];
	$purposeOfVisit = $_POST['purposeOfVisit'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into visitorpass(Name_1, Phone_no, address, nameOfPersonToMeet, Department, purposeOfVisit) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $Name_1, $Phone_no, $address, $nameOfPersonToMeet, $Department, $purposeOfVisit);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>