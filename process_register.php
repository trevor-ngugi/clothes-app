<?php
echo "<pre>";
print_r($_POST);
$firstname=$_POST["firstname"];
$secondame=$_POST["secondname"];

require_once("db_connect.php");
$sql="SELECT * from clients  where username=$secondame";
$results=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($results);

if($pwd==$username){
    session_start();
    $_SESSION['user']=$row["firstname"];
    header("location:profile.php");
}else{
    header("location:login.php");
}

?>