<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connection Successfully";
}
else
{
    echo "Connection Failed";
}

?>