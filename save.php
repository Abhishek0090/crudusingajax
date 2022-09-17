<?php
include 'conn.php';
// if(count($_POST)!=0){
//         extract($_POST);
// 		$name=$_POST['name'];
// 		$email=$_POST['email'];
// 		$contact=$_POST['contact'];
	
// 		$sql = "INSERT INTO `ajaxtable`( `name`, `emaiajaxtablestudenl`,`contact`) 
// 		VALUES ('$name','$email','$contact')";
// 		if (mysqli_query($conn, $sql)) {
// 			echo "Data Inserted Successfully";
// 		} 
// 		else {
// 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 		}
// 		mysqli_close($conn);
// 	}

    if(count($_POST)>0){
        if($_POST['type']==1){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $sql = "INSERT INTO `ajaxtable`( `name`, `email`,`contact`) 
            VALUES ('$name','$email','$contact')";
            if (mysqli_query($conn, $sql)) {
                echo "Data Updated Successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    if(count($_POST)>0){
        if($_POST['type']==2){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $sql = "UPDATE `ajaxtable` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                echo "Data Updated Successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    if(count($_POST)>0){
        if($_POST['type']==3){
            $id=$_POST['id'];
            $sql = "DELETE FROM `ajaxtable` WHERE id=$id ";
            if (mysqli_query($conn, $sql)) {
                echo $id;
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    if(count($_POST)>0){
        if($_POST['type']==4){
            $id=$_POST['id'];
            $sql = "DELETE FROM 'ajaxtable' WHERE id in ($id)";
            if (mysqli_query($conn, $sql)) {
                echo $id;
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>