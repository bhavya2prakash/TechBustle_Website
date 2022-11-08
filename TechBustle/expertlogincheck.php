<?php
session_start();
$email=$_POST['email'];

$password=$_POST['password'];
/*echo $Emailid.$Password;*/
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
if(!$conn){
echo "not connected";
}
else echo "success";
$sql="SELECT * FROM `expertreg` WHERE `email` = '$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
/*echo "<br>".$row['Emailid'];*/
if( $row['email'] == $email)
{
    if($row['password'] == $password){
        if($row['verify'] == 1){
        $_SESSION['name']=$row['name'];
        $_SESSION['e']=$row['email'];
        $_SESSION['id']=(int)2;
        $_SESSION['j']= $row['roll'];
        echo "<script>alert('Login Successful');</script>";
        echo"<script> window.location='dashboard.php'</script>";}
    else{
        echo "<script>alert('You have not been yet verified by the admin! Please wait ');</script>";
        echo'<script> window.location="expertlogreg.php"</script>';
    }}
    else{
    echo "<script>alert('Invalid Passsword');</script>";
    echo"<script> window.location='expertlogreg.php'</script>";
    }
}
else{
    echo "<script>alert('Invalid User');</script>";
    echo'<script> window.location="expertlogreg.php"</script>';

}

?>