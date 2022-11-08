<?php
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
if(isset($_GET['roll'])){
    
    $eid= $_GET['roll'];
    
    $q="UPDATE `expertreg` SET `verify`= 1 WHERE `roll`= $eid";
        $r=mysqli_query($conn,$q);

    $q2="SELECT `email` FROM `expertreg` WHERE `roll`=$eid";
    $r2=mysqli_query($conn,$q2);
    $row=mysqli_fetch_assoc($r2);
    echo $row['email'];
    $email=$row['email'];



        echo"<script> window.location='verify.php'</script>";
}

//echo $email;
    

    
$from="info@techprolabz.com";
//$to="ritika1793sct@gmail.com";

$sub="mail auto";
$msg="this is an automatic mail from TechBustle".PHP_EOL.PHP_EOL."Your Account has been verified";
$header="From:" . $from;

mail($email,$sub,$msg,$header);
?>