<?php
session_start();
if(isset($_SESSION['name'])){
    header('location:dashboard.php');
}
else{
    ?>
<html>
    <head>
    <meta charset="utf-8">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <title>
            LoginReg
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       <style>
           body{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
               font-weight:bolder;
               font-size:20px;
           }
           .a{
                margin-top: 40px;
                height: 500px;
                padding: 10px 10px;
               
            }
            .container{
    position:relative;
    display: flex;
    padding: 40px 0;
    flex-wrap:wrap;
}
.container .box{
    position:relative;
    width:100%;
    height:1300px;
    color:#fff;
    background: #111;
    display:flex;
    justify-content:center;
    align-items: center;
    margin:20px 30px;
    transition: 0.5s;
    
}
.container .box:hover{
    transform:translate(-20px);
}
.container .box::before{
    content:'';
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: linear-gradient(315deg,#033bf4,#0099ff);
    filter:blur(30px);
}
.container .box:nth-child(2)::before,
.container .box:nth-child(2)::after{
   
    background: linear-gradient(45deg,#ff00f2,#ff0058);
}
.container .box span{
    position:absolute;
    top:6px;
    left:6px;
    right:6px;
    bottom:6px;
    background: rgba(0,0,0,0.6);
    z-index:2;
}
.container .box span::before{
    content:'';
    position:absolute;
    top:-0;
    left:0;
    width:50%;
    height:50%;
    background: rgba(255,255,255,0.1);
    pointer-events: none;
}
.container .box .a{
    position: relative;
    z-index: 10;
    padding: 20px 40px;
}
.button-box{
    width:300px;
    margin:35px auto;
   margin-top: -350px;
    position: relative;
    box-shadow: 0 0 20px 9px #A2DCEE;
    border-radius:30px;
}
.toggle-btn{
    
    padding:10px 22px;
    cursor:pointer;
    background:transparent;
    border:0;
    outline: none;
    position: relative;
    

}
#btn{
    top:0;
    left:0;
    position:absolute;
    width:140px;
    height:100%;
    background: linear-gradient(to right,#ff105f,#387097);
    border-radius: 30px;
    transition: .5s;
    
}
.f1{
    top:100px;
    position:absolute;
    width:500px;
    transition: .5s;
    margin-left:-120px;
    
}
.f2{
    top:100px;
    position:absolute;
    width:500px;
    transition: .5s;
    margin-left: -10px;
    
}
.input-field{
    width:90%;
    padding:10px 0;
    margin:5px 0;
    border-left:0;
    border-top:0;
    border-right:0;
    border-bottom: 1px solid #999;
    outline:none;
    background: transparent;
    /*align-items:center;*/
}
.button{
    width:65%;
    padding:10px 30px;
    cursor:pointer;
    display:block;
    margin:auto;
    background: linear-gradient(to right,#ff105f,#387097);
    border:0;
    outline:none;
    border-radius:30px;
    margin-top:2px;
}
#login{
    left:50px;
}
#register{
    left:5000px;
}
img
{
    margin-left:45px;
    height:200px;
    width:90%;
    margin-top:300px;
}
.t{
    color:white;
}

</style>
<body>
<div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <span></span>
                            <div class="a">
                            <div class="boxc">
               
                    <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">LOG IN</button>
                        <button type="button" class="toggle-btn" onclick="register()">REGISTER</button>
                        <form id="login" class= "f1" action="expertlogincheck.php" method="POST">
                    
                        Email-id:  <br>
                        <input type="email" class="input-field" name="email" required>
                        Password:  <br>
                        <input type="password" class="input-field" name="password" required><br><br>
                        
                        
                        <button type= "submit"  class="button"><a href="dashboard.php"><p class="t">Login!</p></a></button><br><br>
                        <center> <a href='forgotexpert.html' style="color:white;"> Forgot Password ?</a></center>
                        </form>
                        <form id="register" class= "f2" action="expertinputdatabase.php" method="POST">
                        
                        Name:  <br>
                            <input type="text" class="input-field" name="name" required><br>
                        Email-id:<br>
                            <input type="email" class="input-field" name="email" required>
                            Password:  <br>
                            <input type="password" class="input-field" name="password" required><br><br>
        
                            Which institution are currently part of:  <br>
                            <input type="text" class="input-field" name="insname" required>
                            What is your designation at that institution:  <br>
                            <input type="text" class="input-field" name="desg" required><br>
                            Can you provide the  institution website link if any: <br>
                            <input type="text"class="input-field" name="inslink" required><br><br>
                          
                            Which field excites you most about technology? (Optional)<br><br>
                            <input type="checkbox"  name="f1" value="S">
                               <label >  AI</label>
                               <input type="checkbox"  name="f2" value="R" >
                               <label > Nano Technology</label>
                               <input type="checkbox"  name="f3" value="G">
                               <label > Programming</label>
                               <input type="checkbox" name="f4" value="O">
                               <label > Others...</label><br><br>
                               What do you prefer to post on TechBustle?  (Optional)<br><br>
                            <input type="checkbox"  name="n1" >
                               <label > Articles</label>
                               <input type="checkbox"  name="n2" >
                               <label > Videos</label>
                               <input type="checkbox"   name="n3" >
                               <label > Podcasts</label>
                               <input type="checkbox"  name="n4" >
                               <label > Others...</label><br><br>
                               
                               <div class="g-recaptcha" data-sitekey="6LevPpgaAAAAAIChjELP_g8QahQCavpakyzrN4hm"></div>
        <br>                    
                               <button type= "submit"  class="button">Register</button>
                                </form>
                           
                    </div> 
                
            </div>
        </div>
     </div>
     
     </div>
     <div class="col-md-6">
     <div class="logo">
     <img src="logocrop.png" style="width: 80%; margin-top: 10px;">
     <img src="uu.png" style="width: 80%; height:400px; margin-top: 10px;">
     
</div>
     
</div>
     </div>
                        
     </div>
     
     <script>
                var x=document.getElementById("login");
                var y=document.getElementById("register");
                var z=document.getElementById("btn");
                function register(){
                    x.style.left="-2000px"; 
                    y.style.left="-50px";
                    z.style.left="110px";
                }
                function login(){
                    x.style.left="50px";
                   y.style.left="3750px";
                    z.style.left="0";
                }
            </script>
            </form>
          
</body>
</html><?php }?>