
<?php
    $email=$_POST['email'];
    $pass=$_POST['passnew'];
    
    
    $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
if(!$conn){
    echo"failed";
}

else{
   echo " ";
} 

    $sql="UPDATE `expertreg` SET `password`='$pass' WHERE `email`='$email'";
        $result=mysqli_query($conn,$sql);
    if(!$result){
        echo"echo<script> alert ('Failed');</script>";
       
    }
    echo"echo<script> alert ('Password Changed Successfully');</script>";
      echo"<script> window.location='expertlogreg.php'</script>";
?>