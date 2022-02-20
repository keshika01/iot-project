<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$password=$_POST['pass']; 

$sql = "select * from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
if($count==1){
   header("Location: home.html");
}
else{
    header("Location: index.php");
}
?>