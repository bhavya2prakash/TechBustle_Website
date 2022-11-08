
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
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 20px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
        #tp{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 26px;
             
            background-color: #f1f1f1;  
        }
.b1{
    width:20%;
    height: 2%;
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

    <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a>
    <a href="trend.php"><i class="fa fa-check" aria-hidden="true"></i><span>Trending</span></a>
    <a href="new.php"><i class="fa fa-newspaper-o" aria-hidden="true" ></i><span>New Post</span></a>
    <hr>
    <a href="savedpost.php"><i class="fa fa-download" aria-hidden="true"></i><span>Saved Posts</span></a>
    <a href="likedpost.php"><i class="fa fa-thumbs-up " aria-hidden="true"></i><span>Liked Posts</span></a><hr>
    <a id="fd" href="" target="_blank"><span id="add">x</span></a>
   
   <a id="fde" href=""><span id="view">z</span></a><hr>
    <a style="cursor: hand;color: rgba(82, 179, 217, 1);" onclick="categ()"><i class="fa fa-sort-down fa-2x"  aria-hidden="true"></i><span >Categories</span></a>
                   <div id="cat" style="display: none;"> 
                   <a href="ai.php"><i class="fa fa-angle-right"></i>Artificial Intelligence</a>
                    <a href="robotics.php"><i class="fa fa-angle-right"></i>Robotics</a>
                    <a href="prog.php"><i class="fa fa-angle-right"></i>Programming</a>
                    <a href="others.php"><i class="fa fa-angle-right"></i>Others</a></div>
   
   
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
 <div class="col-sm-10" >
 <div class="row">
   
  <?php
   
   $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
$erollArray = "1";
 $s1="SELECT * FROM `followexpert` WHERE `userroll`= '$rol' ";
                 $r1=mysqli_query($conn, $s1);
                 while($row1=mysqli_fetch_assoc($r1)){
                        $er = $row1['expertroll'];
                        $erollArray =  $erollArray.",".$er;
                 }
                 $sql2="SELECT `roll`, `name`, `email`, `insname`, `desg` FROM `expertreg` WHERE `roll` IN ( $erollArray) ";
                $result2=mysqli_query($conn, $sql2);
                while ($row2=mysqli_fetch_assoc($result2)){
                    $f2=$row2['roll'];
                    $s2=$row2['name'];
                    $h2=$row2['email'];
                    $d2=$row2['insname'];
                    $pd2=$row2['desg'];
               ?>
  <div class="column">  
  <div class="card">
    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
      <h2> <?php echo  $s2 ;?></h2>
      <h3> <?php echo  $h2 ; ?></h3>
      <h4> <?php echo  $d2 ; ?></h4>
      <h5> <?php echo  $pd2 ;?></h5>
     <center> <button class="b1" onclick="followex(<?php echo $f2 ?>)"><i class = "fa fa-user-plus fa-2x" aria-hidden="true"></i></button></center>
    </div>
  </div>                    
 <?php } ?>
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

function followex(exroll)
                {
                  var r = confirm("Are you sure you wanna Unfollow ?");
           if (r == true) {
          senddata='id='+exroll;
                    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText=""){
            alert(this.responseText);
            location.reload();
        }
        else{
            alert(this.responseText);
            location.reload();
        }  
    }
  };
  xhttp.open("POST", "follow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(senddata);
}}
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