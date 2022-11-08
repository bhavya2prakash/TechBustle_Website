<?php

session_start();

if(isset($_SESSION['name']))
{
    $nam=$_SESSION['name'];
$id=$_SESSION['id'];
$rol=$_SESSION['j'];
?>
<html>

<head>
<title>

</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
            
            background-color:#F5F5F7;
            background-size:cover;
           font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
    .sidebar{
       
           
            padding-top: 30px;
            padding-left: 10px;
            margin-left: 0;
            left: 0;
            width: 230px;
            
        }
        .sidebar a{
            color: rgba(82, 179, 217);
            font-weight: bolder;
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: none;
            padding-left: 0px;
            box-sizing: border-box;
            transition: 0.5s;
            
        }
        .sidebar a:hover{
            background: rgba(253, 224, 224);
            

        }
        .sidebar i{
            padding-right: 10px;
        }
        #z{
            margin-left: 10px;
          
            margin-top:-10px;
        }
        
.b1 {
  background-color: white; 
  color:#FFB6C1; 
  border: 3px solid #FFB6C1;
}

.b1:hover {
  background-color: rgba(82, 179, 217, 1);
  border: 3px solid rgba(82, 179, 217, 1);
  color: white;
}
.b1:active {
  background-color: rgba(82, 179, 217, 1);
  border: 3px solid rgba(82, 179, 217, 1);
  transform: translateY(4px);
}


.wrapper .outer{
 display: flex;
 align-items: center;
 justify-content: center;
 margin-top:370px;
 position:fixed;
 margin-left:200px;
} 
.wrapper .card{
 background: #FFB6C1;
 width: 350px;
 display: flex;
 align-items: center;
 padding: 20px;
 opacity: 0;
 pointer-events: none;
 position: absolute;
 justify-content: space-between;
 border-radius: 100px 20px 20px 100px;
 box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
 animation: animate 15s linear infinite;
 animation-delay: calc(3s * var(--delay));
}
.outer:hover .card{
 animation-play-state: paused;
}
.wrapper .card:last-child{
 animation-delay: calc(-3s * var(--delay));
}
@keyframes animate {
 0%{
 opacity: 0;
 transform: translateY(100%) scale(0.5);
 }
 5%, 20%{
 opacity: 0.4;
 transform: translateY(100%) scale(0.7);
 }
 25%, 40%{ 
 opacity: 1;
 pointer-events: auto;
 transform: translateY(0%) scale(1);
 }
 45%, 60%{
 opacity: 0.4;
 transform: translateY(-100%) scale(0.7);
 }
 65%, 100%{
 opacity: 0;
 transform: translateY(-100%) scale(0.5);
 }
}
.card .content{
 display: flex;
 align-items: center;
}
.wrapper .card .img {
 height: 90px;
 width: 90px;
 position: relative;
 left: -10px;
 background: #fff;
 border-radius: 50%;
 padding: 5px;
 box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
}
.card .img img{
 height: 100%;
 width: 100%;
 border-radius: 50%; 
 object-fit: cover;
}
.card .details{
 margin-left: 30px;
}
.details span{
 font-weight: 600;
 font-size: 18px;
}
.card a{
 text-decoration: none;
 padding: 7px 18px;
 border-radius: 25px;
 color: #fff;
 background: linear-gradient(to bottom, #bea2e7 0%, #86b7e7 100%);
 transition: all 0.3s ease;
}
.card a:hover{
 transform: scale(0.94)
}
#owl{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;;
    font-weight:bolder;
}
#owl .img{
            transition:1s;
            padding:10px;
            width:500px;
            cursor:pointer;

        }
        #owl .img:hover{
            filter:grayscale(0%);
            transform:scale(1.1);
        }
        #post{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 26px; 
            background-color: #f1f1f1;
            margin-top: 20px;
        }
        #tp{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 26px;
             
            background-color: #f1f1f1;  
        }
.b1{
    width:20%;
    height: 4%;
}



.b1:hover
{
    background-color:#fff;
    box-shadow:0px 10px 10px 10px #97b1bf;
    color:rgba(82, 179, 217, 1);
}


.b1:focus{
    outline:none;
}



.btn{
    color:rgba(82, 179, 217, 1);
    border:flex;
    background-color:white;
    font-weight:bolder;
    border-color:rgba(82, 179, 217, 1);
    margin-top:5px;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<div style="background-color: #FFB6C1; height:50; z-index:100001;" id="tp">
       <!-- <img src="logocrop.png" style=" margin-top:0px; "width="150" height="90">-->
       <a id = "z"></a><a><?php echo $nam; ?></a>
             <a href="chatbot.php"><button style="margin-left: 1000; margin-top:-20px" class="btn" >CHAT</button></a>
             <a href="quiz.html"><i class="fa fa-gamepad fa-2x" aria-hidden="true" style="margin-left:1300px; margin-top:-40px; color:rgba(82, 179, 217, 1);">  QUIZ</i></a>
             
    
    <?php
    if($_SESSION['name']==""){
     echo "<script>document.getElementById('z').innerHTML='Hi' ;</script>";

    }
    else{
       
     echo "<script>document.getElementById('z').innerHTML='Hello  ' ;</script>";
    }
    
    ?>
       
</div>   
<div class= "container-fluid">
            <div class="row">
                <div class="col-sm-2" >
                         
        
<div class="sidebar">
    <img src="logocrop.png" style="width:250px;">


    <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a><hr>
    <a href="trend.php"><i class="fa fa-check" aria-hidden="true" ></i><span>Trending</span></a>
    <hr>
    <a href="savedpost.php"><i class="fa fa-download" aria-hidden="true"></i><span>Saved Posts</span></a>
    <a href="likedpost.php"><i class="fa fa-thumbs-up " aria-hidden="true"></i><span>Liked Posts</span></a><hr>
    <a id="fd" href="" target="_blank"><span id="add">x</span></a>
   
   <a id="fde" href=""><span id="view">z</span></a><hr>
    <a style="cursor: hand;color: rgba(82, 179, 217, 1);" onclick="categ()"><i class="fa fa-sort-down fa-2x"  aria-hidden="true"></i><span >Categories</span></a>
                   <div id="cat" style="display: none;"> 
                   
                    <a href="robotics.php"><i class="fa fa-angle-right"></i>Robotics</a>
                    <a href="prog.php"><i class="fa fa-angle-right"></i>Programming</a>
                    <a href="others.php"><i class="fa fa-angle-right"></i>Others</a></div>
   
    <a  href="following.php"><i class='fa fa-user-plus' aria-hidden='true'></i><span>Following</span></a><hr>
    <a href="delete.php"><i class="fa fa-trash" aria-hidden="true"></i><span>Delete Account</span></a>
    <a href="changepass.php" target="_blank"><i class="fa fa-key" aria-hidden="true"></i><span>Change Password</span></a>
    <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" ></i><span>Log Out</span></a>
    <?php
            if($id == 1){
             echo "<script>document.getElementById('add').innerHTML='' ;</script>";
             echo "<script>document.getElementById('view').innerHTML='' ;</script>";
             
             
            }
            else{
              
             echo "<script>document.getElementById('add').innerHTML=' + Add Post ' ;</script>";
             echo "<script>document.getElementById('fd').href='addfeed.html' ;</script>";
             echo "<script>document.getElementById('view').innerHTML=' @ My Posts' ;</script>";
             echo "<script>document.getElementById('fde').href='mypost.php' ;</script>";

             
            }
            
            ?>

    
   
    
</div>
 </div> 
 <div class="col-sm-7" id="owl">
                        <div id="post" >
                          
                        </div>
                        <?php
                        $erollArray = "1";
            $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
            $sql2="SELECT `roll`, `name`, `email`, `insname`, `desg`FROM `expertreg` WHERE `roll` NOT IN ($rol)  AND `verify`=1";
                $result2=mysqli_query($conn, $sql2);
           
               
                 $sql="SELECT * FROM `feed` WHERE `category` = 'A' ORDER BY `date` desc";
                $result=mysqli_query($conn, $sql);
                
               while($row=mysqli_fetch_assoc($result)){
                    $f=$row['filename'];
                    $dt=$row['date'];
                    $s=$row['filetype'];
                    $h=$row['head'];
                    $d=$row['desc'];
                    $pd=$row['postid'];
                    $l=$row['likes'];
                    $au=$row['author'];
                    ?>
 
<script> 
              
var gd= document.createElement("div");
gd.setAttribute("class","col-sm-7");
document.getElementById("post").appendChild(gd);
if("<?php echo $s ;?>"=="jpg" ||"<?php echo $s ;?>"=="jpeg"||"<?php echo $s ;?>"=="png"  ){
    var a= document.createElement('p');
               a.innerHTML="<?php echo "Post By:  ",  $au;?>"
               a.style.color='black';
               document.getElementById("post").appendChild(a);
               // gd.innerHTML="<?php echo $f ?>";
              var he= document.createElement('h3');
               he.innerHTML="<?php echo $h;?>"
               he.style.color='black';
               he.style.marginTop="10px";
               gd.appendChild(he);
               var p= document.createElement('p');
               p.innerHTML=" Date & Time :<?php echo $dt;?>"
               gd.appendChild(p);
                
             // gd.innerHTML="<?php echo $h;?>"
                var i=document.createElement("img");
                i.setAttribute("class","img");

               
                i.setAttribute("src","feed/<?php echo $f?>");
               
               
                i.style.height=500;
                i.style.width=800;
                i.style.padding=30;
                gd.appendChild(i);
               var p= document.createElement('p');
               p.innerHTML="<?php echo $d;?>"
               document.getElementById("post").appendChild(p);
               var k= document.createElement('p');
               k.style.margin=0;
               k.innerHTML='Likes : <?php echo $l;?>';
               document.getElementById("post").appendChild(k);
               var l= document.createElement('button');
               l.setAttribute("class","b1");
               l.setAttribute("onclick","likepost(<?php echo $pd;?>,<?php echo $l;?>)");
               l.setAttribute("id","liked");
            
               l.innerHTML='<i class = "fa fa-thumbs-up fa-2x" aria-hidden="true"></i>';
               document.getElementById("post").appendChild(l);
               
              
               var s= document.createElement('button');
               s.setAttribute("class","b1");
               s.setAttribute("onclick","savepost(<?php echo $pd;?>)");
               s.setAttribute("id","saved");

              
               s.style.margin=30;
               s.innerHTML='<i class = "fa fa-download fa-2x" aria-hidden="true"></i>';
               
               document.getElementById("post").appendChild(s);
                var h= document.createElement('hr');
                document.getElementById("post").appendChild(h);
                }
                else if ("<?php echo $s ;?>"=="mp4"){
                    var a= document.createElement('p');
               a.innerHTML="<?php echo "Post By:  ",  $au;?>"
               a.style.color='black';
               document.getElementById("post").appendChild(a);
               // gd.innerHTML="<?php echo $f ?>";
              var he= document.createElement('h3');
               he.innerHTML="<?php echo $h;?>"
               he.style.color='black';
               he.style.marginTop="10px";
               gd.appendChild(he);
               var p= document.createElement('p');
               p.innerHTML=" Date & Time : <?php echo $dt;?>"
               gd.appendChild(p);
                
                
             // gd.innerHTML="<?php echo $h;?>"
                var v=document.createElement("video");
                v.setAttribute("src","v4.mp4");
                v.setAttribute("controls", "controls");
                v.style.height=500;
                v.style.width=800;
                v.style.padding=30;
                gd.appendChild(v);
                var p= document.createElement('p');
               p.innerHTML="<?php echo $d;?>"
               document.getElementById("post").appendChild(p);
               var k= document.createElement('p');
               //k.setAttribute("class","b1");
              // k.setAttribute("onclick","savepost(<?php echo $pd;?>)");
              // k.setAttribute("id","saved");

              
               k.style.margin=0;
               k.innerHTML='Likes : <?php echo $l;?>';
               document.getElementById("post").appendChild(k);
               var l= document.createElement('button');
               l.setAttribute("class","b1");
               l.setAttribute("onclick","likepost(<?php echo $pd;?>,<?php echo $l;?>)");
               l.setAttribute("id","liked");
               l.innerHTML='<i class = "fa fa-thumbs-up fa-2x" aria-hidden="true"></i>';
               
               document.getElementById("post").appendChild(l);
               var s= document.createElement('button');
               s.setAttribute("class","b1");
               s.setAttribute("onclick","savepost(<?php echo $pd;?>)");
               s.setAttribute("id","saved");
               s.innerHTML='<i class = "fa fa-download fa-2x" aria-hidden="true"></i>';
               s.style.margin=30;
               
               document.getElementById("post").appendChild(s);
                var h= document.createElement('hr');
                document.getElementById("post").appendChild(h);
                }
              
                
          
            </script>
                  
                
           <?php
                }
           ?>

             
                    </div>
                    <div class="col-sm-3" >
                    <div class="wrapper" style="z-index: 100;">
                    <div class="outer">
                    <?php $x=-3;while($row2=mysqli_fetch_assoc($result2)){
                    $f2=$row2['roll'];
                    $s2=$row2['name'];
                    $h2=$row2['email'];
                    $d2=$row2['insname'];
                    $pd2=$row2['desg'];?>
                    
 <div class="card" style="--delay:<?php echo $x;?>; ">
 <div class="content">
 <div class="img"><img src="ex.png" alt=""></div>
 <div class="details">
 <span class="name"><?php echo $s2?></span> 
 <p><?php echo $h2?></p>
 <p><?php echo $d2?></p>
 <p><?php echo $pd2?></p>
 </div>
 </div>
 <a id= "h" onclick="followex(<?php echo $f2 ?>)"><i class = "fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
 </div>
 <?php $x=$x+1; }?>
 </div>
 </div>
 
                    </div>
 </div>
 </div> 
    <body> 
    <script>
function categ() {
  var x = document.getElementById("cat");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function likepost(likeid,likecount)
                {
          senddata='id='+likeid+'&lt='+likecount;
        
                    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
    }
  };
  xhttp.open("POST", "like.php", true);
  
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(senddata);
  location.reload();
  
}
function savepost(saveid)
                {
                    
           
         
         
            senddata='id='+saveid;
                    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText=""){
            alert(this.responseText);
        }
        else{
            alert(this.responseText);
        }
        
    }
  };
  xhttp.open("POST", "save.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(senddata);
          
          
  
}
function followex(exroll)
                {
          senddata='id='+exroll;
                    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText=""){
            alert(this.responseText);
        }
        else{
            alert(this.responseText);
        }  
    }
  };
  xhttp.open("POST", "follow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(senddata);
}
</script>
    <html>
        <?php
}
else
{
    echo"<script>location.replace('firstpage.php');</script>";
//rediredt==ct
}

?>