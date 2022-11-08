<?php

session_start();

if(isset($_SESSION['email']))
{
   error_reporting(0);
?>
<html>

    <head>
<title>
Admin Dashboard
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
       
    .sidebar{
       
           
            padding-top: 30px;
            padding-left: opx;
            margin-left: 0;
            background-color: whitesmoke;
            left: 0;
            width: 230px;
           
            
        }
        .sidebar a{
            
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: white;
            padding-left: 3px;
            box-sizing: border-box;
            transition: 0.5s;
            transition-property:all;
        }
        .sidebar a:hover{
            background: rgb(253, 135, 154, 0.4);
            

        }
        .sidebar i{
            padding-right: 10px;
        }
        
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
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
        

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
    <body> 
    
     
        <div class = "card" style="background-color: salmon; height: 50; ">     
        </div>     
        
        <div class= "container-fluid">
            <div class="row">
            <div class="col-sm-2 " style=" background-color: whitesmoke; margin-top: 10px;" >
                         
        
<div class="sidebar">
    <a href="verify.php"><i class="fa fa-check" aria-hidden="true"></i><span>Verify Expert</span></a>
    <a href="expertmanage.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Manage Experts</span></a>
    <a href="usermanage.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Manage Users</span></a><br><hr><br>
    <a href="addfeed.html" target="_blank"><i class="fa fa-plus" aria-hidden="true" ></i><span>Add Posts</span></a>
    <a href="viewpost.php"><i class="fa fa-photo" aria-hidden="true" ></i><span>Manage Posts</span></a><br><hr>
    <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log Out</span></a>
    
    
   
    
</div>
                    </div>
                    <div class="col-sm-10">
                    <div class="row">
  <div class="column">
    <?php $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
          $s1="SELECT COUNT(*) `totalU` FROM `userreg`";
          $r1=mysqli_query($conn, $s1);
          $row1=mysqli_fetch_assoc($r1);
          $s2="SELECT COUNT(*) `totalE` FROM `expertreg` GROUP BY `verify`";
          $r2=mysqli_query($conn, $s2);
          $row2=mysqli_fetch_assoc($r2);
          $ro2=mysqli_fetch_assoc($r2);
          $s3="SELECT COUNT(*) `totalP` FROM `feed`";
          $r3=mysqli_query($conn, $s3);
          $row3=mysqli_fetch_assoc($r3);
          $s4="SELECT COUNT(*) `totalL` FROM `likepost`";
          $r4=mysqli_query($conn, $s4);
          $row4=mysqli_fetch_assoc($r4);
          $s5="SELECT COUNT(*) `totalS` FROM `savepost`";
          $r5=mysqli_query($conn, $s5);
          $row5=mysqli_fetch_assoc($r5);
          $s6="SELECT COUNT(*) `totalF` FROM `followexpert`";
          $r6=mysqli_query($conn, $s6);
          $row6=mysqli_fetch_assoc($r6);




          ?>
    <div class="card">
    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row1['totalU'];?></h3>
      <p>The total no.of users</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
    <i class="fa fa-ban fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row2['totalE'];?></h3>
      <p>The total no.of unverified experts</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <i class="fa fa-check-circle-o fa-5x" aria-hidden="true"></i>
      <h3><?php echo $ro2['totalE'];?></h3>
      <p>The total no.of verified experts</p>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <i class="fa fa-photo fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row3['totalP'];?></h3>
      <p>The total no. of posts</p>
      
    </div>
  </div>
  <div class="column">
    <div class="card">
    <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row4['totalL'];?></h3>
      <p>The total no. of likes</p>
      
    </div>
  </div>
  <div class="column">
    <div class="card">
    <i class="fa fa-download fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row5['totalS'];?></h3>
      <p>The total no. of saves</p>
      
    </div>
  </div>
  <div class="column">
    <div class="card">
    <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
      <h3><?php echo $row6['totalF'];?></h3>
      <p>The total no. of following</p>
      
    </div>
  </div>
  
</div>
</div>
            </div>
            </div>
<body>
</html>
<?php
}
else
{
    echo"<script>location.replace('firstpage.php');</script>";
//rediredt==ct
}

?>