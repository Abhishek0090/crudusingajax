<?php
include 'conn.php';

extract($_GET);
$query = "DELETE FROM ajaxtable WHERE id='$id'";
mysqli_query($conn,$query);
header('Location:home.php');


?>