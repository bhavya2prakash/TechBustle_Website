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
    $q2="SELECT `email` FROM `feed` WHERE `postid`=$pid";
    $r2=mysqli_query($conn,$q2);
    $row=mysqli_fetch_assoc($r2);
    echo $row['email'];
    $email=$row['email'];
    $q="DELETE FROM `feed` WHERE `postid`= $pid";
        $r=mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($r);
       
       /* if(empty($row)){
        $sql1="INSERT INTO `likepost`( `roll`, `postid`) VALUES ($userid,$pid)";
        $result=mysqli_query($conn,$sql1);
       // echo"<script> window.location='dash2.php'</script>";
        
        }
        else{
          echo "already liked";
          $sql2="DELETE FROM `likepost` WHERE `postid`= $pid AND `roll`= $userid";
          $result=mysqli_query($conn,$sql2);
        }*/
        
      }
   //echo $email;
    

    
$from="info@techprolabz.com";
//$to="ritika1793sct@gmail.com";

$sub="mail auto";
$msg="this is an automatic mail from TechBustle".PHP_EOL.PHP_EOL."Your Post has been removed";
$header="From:" . $from;

mail($email,$sub,$msg,$header);
?>
