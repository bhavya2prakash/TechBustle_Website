<?php
    $email=$_POST['Email'];
    $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
    if(!$conn){
        echo"failed";
    }
    
    else{
       echo " ";
    } 

    $sql="SELECT * FROM `userreg` WHERE `email`='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
    if($row['email']!=$email){
        echo"<script> alert ('Email id not registered');</script>";
        echo "<script> window.location='forgotuser.html' </script>";
    }
    
    
    //echo $email;
    
    $code=rand(100000,999999);
    
    $from="info@techprolabz.com";
    //$to="ritika1793sct@gmail.com";
    
    $sub="mail auto";
    $msg="this is an automatic mail from TechBustle".PHP_EOL.PHP_EOL."Your One Time Password is : $code";
    $header="From:" . $from;
    
    mail($email,$sub,$msg,$header);

?>

<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
body{
    background-image: url("j1.jpg");
    background-repeat: no-repeat;
    background-position: cover;
    background-size: cover;


    

}
h5{
    margin-top:20px;
}
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-4" id="l">
                    <img src="logo.png" style="width: 100%; margin-top:-180px;  background-color: rgb(255,255,255,0.3);">
                    <img src="uu.png" style="width: 100%; margin-top: -160px;">
                </div>
                
                
                <div class="col-md-7">
            <div class="main-form">
                    
                    <form action="forgotuser3.php" method="POST">
                        <input type="text" name="email" value="<?php echo $email ?>"  hidden>
                        <input type="text" name="otp2" value="<?php echo $code ?>" hidden>
                        
                    
                            <h5>Enter OTP </h5><br><br>
                            <input type="text" class="form-control py-2" id="otp"   name="otp1"    aria-describedby="emailHelp">
             
                        <br><br>
                       
                        
                            <button type="submit" class="btn btn-primary ">NEXT</button></div>
                            
                        
                    </form>
                </div>
</div>
            </div>
        
    </body>
    
</html>
