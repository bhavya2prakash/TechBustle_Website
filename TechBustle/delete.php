<?php
session_start();
$email=$_SESSION['e'];


$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");

if($_SESSION['id']==1){

    $sql="DELETE FROM `userreg` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    
session_unset();
session_destroy();
echo "<script>alert('Account Successfully deleted');</script>"; 
echo"<script>location.replace('firstpage.php');</script>";



   }
   else{
      
    $sql="DELETE FROM `expertreg` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    
    session_unset();
    session_destroy();
    echo "<script>alert('Account Successfully deleted');</script>"; 
    echo"<script>location.replace('firstpage.php');</script>";
   

   }
   
?>