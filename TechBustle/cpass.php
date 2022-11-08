<?php
session_start();
$email=$_SESSION['e'];
$password=$_POST['pass'];
$npassword=$_POST['newpassword'];
$ncpassword=$_POST['newpasswordcon'];
$id=$_SESSION['id'];
/*echo $Emailid.$Password;*/
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
/*if(!$conn){
echo "not connected";
}
else echo "success";*/

if($id==1){
$sql="SELECT * FROM `userreg` WHERE `email` = '$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
/*echo "<br>".$row['Emailid'];*/
if( $row['email'] == $email)
{
    if($row['password'] == $password){
        if($npassword == $ncpassword){
        $sql1="UPDATE `userreg` SET `password`='$npassword' WHERE `email`='$email'";
        $result=mysqli_query($conn,$sql1);
        echo "<script>alert('Password Updated Successfully !');</script>";
        echo "<script> window.location='changepass.php' </script>";}
        else{
            echo "<script>alert('Enter Correct Confirm New Password !');</script>";
            echo "<script> window.location='changepass.php' </script>";
        }
    }
    else{
    echo "<script>alert('Invalid Passsword');</script>";
    echo "<script> window.location='changepass.php' </script>";
    
    }

}}
else{
    $sql="SELECT * FROM `expertreg` WHERE `email` = '$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    /*echo "<br>".$row['Emailid'];*/
    if( $row['email'] == $email)
    {
        if($row['password'] == $password){
            if($npassword == $ncpassword){
            $sql1="UPDATE `expertreg` SET `password`='$npassword' WHERE `email`='$email'";
            $result=mysqli_query($conn,$sql1);
            echo "<script>alert('Password Updated Successfully !');</script>";
            echo "<script> window.location='changepass.php' </script>";}
            else{
                echo "<script>alert('Enter Correct Confirm New Password !');</script>";
                echo "<script> window.location='changepass.php' </script>";}
            }
            else{
            echo "<script>alert('Invalid Passsword');</script>";
            echo "<script> window.location='changepass.php' </script>";
            
            }
        
        }}


?>