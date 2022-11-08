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
if(isset($_POST['id'])){
    
    $pid= $_POST['id'];
    $q="SELECT * FROM `savepost` WHERE `postid`= $pid AND `roll`= $userid";
        $r=mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($r);
        if(empty($row)){
        $sql1="INSERT INTO `savepost`( `roll`, `postid`) VALUES ($userid,$pid)";
        $result=mysqli_query($conn,$sql1);
       echo"Saved Post !! Click again to unsave it ";
        
        }
        else{
          echo "Unsaved";
          $sql2="DELETE FROM `savepost` WHERE `postid`= $pid AND `roll`= $userid";
          $result=mysqli_query($conn,$sql2);
        }
      }
   
?>
