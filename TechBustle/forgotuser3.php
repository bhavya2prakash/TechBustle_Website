<?php 
    $email=$_POST['email'];
    $otp2=$_POST['otp2'];
    $otp1=$_POST['otp1'];
    
    //echo $email.$otp1.$otp2;
    if($otp1!=$otp2){
         echo"<script> alert ('Wrong OTP');</script>";
         echo"<script> window.location='forgotuser.html'</script>";
    }
   
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
       
        <center><h2>RESET PASSWORD</h2></center>
                    
                    <form action="cpu.php" method="POST">
                        
                        <input type="text" value="<?php echo $email ?>" name="email" hidden>
                        
                       
                            <h5>New Password </h5><br><br>
                            <input type="text" class="form-control py-2" id="username"   name="passnew"    aria-describedby="emailHelp">
             
                        <br><br>
                       
                        
                            <button type="submit" class="btn btn-primary ">CONFIRM</button></div>
                            
                        
                    </form>
                </div>
               
            </div>
        </div>
    </body>
</html>
