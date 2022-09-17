<?php

$conn = mysqli_connect('localhost','root','','crudajax');

if($conn){
    echo "Connected Successfully" ;
}
else{
    echo 'Something went wrong' .mysqli_connect_error() ;
}


?>
