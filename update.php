<?php
include 'conn.php';
if(count($_POST)!=0){
        extract($_POST);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
	
		$sql = "INSERT INTO `ajaxtable`( `name`, `email`,`contact`) 
		VALUES ('$name','$email','$contact')";
		if (mysqli_query($conn, $sql)) {
			echo "Data Inserted Successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

?>