<?php
session_start();
$userid=$_SESSION['j'];
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
/*if(isset($_GET['id'])){
  
 $pid= $_GET['id'];
}
echo $pid;
$q="SELECT * FROM `likepost` WHERE `postid`= $pid";
$r=mysqli_query($con,$q);
$row = mysqli_fetch_assoc($r);
if(empty($row)){
  $sql="INSERT INTO `likepost`( `roll`, `postid`) VALUES ($userid,$pid)";
  $result=mysqli_query($con,$sql);
}
*/
if(isset($_POST['id'])&& isset($_POST['lt'])){
    
    $pid= $_POST['id'];
    
    $lc= $_POST['lt'];
    $q="SELECT * FROM `likepost` WHERE `postid`= $pid AND `roll`= $userid";
        $r=mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($r);
        if(empty($row)){
          $lc=$lc+1;
        $sql1="INSERT INTO `likepost`( `roll`, `postid`) VALUES ($userid,$pid)";
        $result=mysqli_query($conn,$sql1);
        $sql2="UPDATE `feed` SET likes = $lc WHERE `postid`= $pid";
        $result2=mysqli_query($conn,$sql2);
       echo"<script> location.reload();</script>";
        
        }
        else{
          $lc=$lc-1;
          $sql3="DELETE FROM `likepost` WHERE `postid`= $pid AND `roll`= $userid";
          $result=mysqli_query($conn,$sql3);
          $sql2="UPDATE `feed` SET likes = $lc WHERE `postid`= $pid";
          $result2=mysqli_query($conn,$sql2);

        }
      }
     

   
?>
