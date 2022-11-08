<?php
session_start();
$id=$_SESSION['j'];
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
if(isset($_POST['id'])){
    
    $eid= $_POST['id'];
    $q="SELECT * FROM `followexpert` WHERE `userroll`= $id AND `expertroll`= $eid";
        $r=mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($r);
        if(empty($row)){
        $sql1="INSERT INTO `followexpert`( `userroll`, `expertroll`) VALUES ($id,$eid)";
        $result=mysqli_query($conn,$sql1);
       // echo"<script> window.location='dash2.php'</script>";
       echo"Followed the expert !! Click again to Unfollow ";
        }
        else{
          echo "Unfollowed the expert";
          $sql2="DELETE FROM `followexpert` WHERE `userroll`= $id AND `expertroll`= $eid";
          $result=mysqli_query($conn,$sql2);
        }
      }
   
?>