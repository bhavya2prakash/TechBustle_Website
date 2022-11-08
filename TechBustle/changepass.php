<?php

session_start();

if(isset($_SESSION['name']))
{
$nam=$_SESSION['name'];
$id=$_SESSION['id'];
$rol=$_SESSION['j'];
$ema=$_SESSION['e'];

?>
<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .main-form{
                margin-top:20px;
               
                width:100%;
                height:600px;
                font-size:25px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                border-radius:10px;
                color:black;
                
                background-color:rgb(255,255,255,0.3);
            }
            .container-fluid{
                background-image:url(j1.jpg);
                background-size: cover;
                border-radius: 10px;
            }
            h1{
                color :black;
              font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            label{
                font-weight: normal;
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
                <h1>WELCOME TO TECHBUSTLE</h1><br><br>
                <form  action="cpass.php" method="POST">
                             
                             Emai-id:  <br>
                             <input type="text" name="email" value="<?php echo $ema ;?>" readonly><br>
                             Password:  <br>
                             <input type="password" name="pass" required><br>
                             New Password:<br>
                             <input type="password" name="newpassword" required><br>
                             Confirm New Password:<br>
                             <input type="password" name="newpasswordcon" required><br><br>
                             
                             <button type= "submit"  class="b1">Change Password</button>
                             </form>
            </div>
            </div>
            </div>
            </div>
    </body>
</html>
<?php
}
else
{
    echo"<script>location.replace('firstpage.php');</script>";
//rediredt==ct
}

?>
