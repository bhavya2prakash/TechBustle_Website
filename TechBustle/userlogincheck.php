<?php
session_start();
$email=$_POST['email'];

$password=$_POST['password'];
/*echo $Emailid.$Password;*/
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");

$sql="SELECT * FROM `userreg` WHERE `email` = '$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
/*echo "<br>".$row['Emailid'];*/

if( $row['email'] == $email)
{
    if($row['password'] == $password){
        $_SESSION['name']=$row['name'];
        $_SESSION['e']=$row['email'];
        $_SESSION['id']=(int)1;
        $_SESSION['j']= $row['roll'];

        echo "<script>alert('Login Successful');</script>";
        echo"<script> window.location='dashboard.php'</script>";}
    else{
    echo "<script>alert('Invalid Passsword');</script>";
    echo"<script> window.location='userlogreg.php'</script>";
    }
}
else{
    echo "<script>alert('Invalid User');</script>";
    echo'<script> window.location="userlogreg.php"</script>';

}



?>