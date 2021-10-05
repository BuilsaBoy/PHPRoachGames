<?php 
// Creating Connection String
$host = "localhost";
$user = "root";
$password = "";
$database = "tonyroachgames";

// Creating Connection to Database 
$con = mysqli_connect($host,$user,$password,$database);

// Checking Connection State
if(mysqli_connect_errno()){
    echo "Failed To Connect To Mysql Database : " . mysqli_connect_error();
}



?>