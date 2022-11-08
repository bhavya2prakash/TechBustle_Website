<?php
session_start();
$email=$_POST['email'];

$password=$_POST['password'];
$e="abnp@pwc";
$p="techbustle";
/*
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
if(!$conn){
echo "not connected";
}
else echo "success";
$sql="SELECT * FROM `userreg` WHERE `email` = '$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo "<br>".$row['Emailid'];*/
if($email==$e)
{
    if( $password==$p){
        $_SESSION['email']="abnp@pwc";
       
        echo "<script>alert('Login Successful');</script>";
        echo"<script> window.location='admindash.php'</script>";}
    else{
    echo "<script>alert('Invalid Passsword');</script>";
    echo"<script> window.location='adminlogin.html'</script>";
    }
}
else{
    echo "<script>alert('Invalid User');</script>";
    echo'<script> window.location="adminlogin.html"</script>';

}

?>