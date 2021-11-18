<?php 
$servername="localhost";
$username="root";
$password="";
$db="clothes";
$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("not connected to database".mysqli_connect_error());
}else{
    echo "coonected to the database";
}

?>