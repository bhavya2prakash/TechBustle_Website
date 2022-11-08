<?php
 $N=$_POST['name'];
 $E=$_POST['email'];
 $P=$_POST['password'];
 $f1="";
 $f2="";
 $f4="";
 $f3="";
  if(isset($_POST['f1']))
 {
  $f1=$_POST['f1'];

 }
 if(isset($_POST['f2']))
 {
  $f2=$_POST['f2'];
   
 }
 if(isset($_POST['f3']))
 {
  $f3=$_POST['f3'];
   
 }
 if(isset($_POST['f4']))
 {
  $f4=$_POST['f4'];
   
 }
 
 $f =  $f1.$f2.$f3.$f4;
 
$n1="";$n2="";$n3="";$n4="";

if(isset($_POST['n1']))
{
 $n1=$_POST['n1'];
  
}

if(isset($_POST['n2']))
{
 $n2=$_POST['n2'];
  
}


if(isset($_POST['n3']))
{
 $n3=$_POST['n3'];
  
}

if(isset($_POST['n4']))
{
 $n4=$_POST['n4'];
  
}

 $n =  $n1.$n2.$n3.$n4;
if($n=="")
{
  $n="NULL";
}
if($f=="")
{
  $f="NULL";
}
 $secretKey = "6LevPpgaAAAAAA6BxbyrktB-Oh6M1zkLiU6kwwxd";
 $responseKey = $_POST['g-recaptcha-response'];
 $userIP = $_SERVER['REMOTE_ADDR'];

 $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
 $response = file_get_contents($url);
 $response = json_decode($response);
 
 if ($response->success){
       $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
      
        $sql="INSERT INTO `userreg`( `name`, `email`, `password`, `field`, `upd`) VALUES ('$N','$E','$P','$f','$n')";
        $result=mysqli_query($conn, $sql);
        if($result==1){
          echo "<script> alert('You are successfully registered !'); </script>";
            echo"<script> window.location='userlogreg.php'</script>";
           }
           else{
            echo "<script> alert('An account with this email address already exist !'); </script>";
            echo"<script> window.location='userlogreg.php'</script>";
    
           }
         
    }
     else{
        echo "<script> alert('Please go back and verify the captcha!'); </script>";
        echo "<script> window.location='userlogreg.php' </script>";
}