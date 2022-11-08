<?php
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
if(isset($_GET['roll'])){
    
    $eid= $_GET['roll'];
    $q2="SELECT `email` FROM `userreg` WHERE `roll`=$eid";
    $r2=mysqli_query($conn,$q2);
    $row=mysqli_fetch_assoc($r2);
    echo $row['email'];
    $email=$row['email'];
    $q="DELETE FROM `userreg` WHERE `roll`= $eid";
        $r=mysqli_query($conn,$q);
       
        echo"<script> window.location='usermanage.php'</script>";
}
//echo $email;
    

    
$from="info@techprolabz.com";
//$to="ritika1793sct@gmail.com";

$sub="mail auto";
$msg="this is an automatic mail from TechBustle".PHP_EOL.PHP_EOL."Your Account has been deleted";
$header="From:" . $from;

mail($email,$sub,$msg,$header);
?>