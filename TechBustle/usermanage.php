<?php

session_start();

if(isset($_SESSION['email']))
{
   
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



/* Style the counter cards */
.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 26px;
text-align: center;
background-color: #f1f1f1;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
   

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body> 

 
    <div style="background-color: salmon; height: 50; ">     
    </div>     
    
    <div class= "container-fluid">
        <div class="row">
            <div class="col-sm-2 " style=" background-color: whitesmoke;" >
                     
    
<div class="sidebar">
<a href="admindash.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a><hr><br>
<a href="verify.php"><i class="fa fa-check" aria-hidden="true"></i><span>Verify Expert</span></a>
<a href="expertmanage.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Manage Experts</span></a><br><hr><br>
<a href="addfeed.html" target="_blank"><i class="fa fa-plus" aria-hidden="true" ></i><span>Add Posts</span></a>
<a href="viewpost.php"><i class="fa fa-photo" aria-hidden="true" ></i><span>Manage Posts</span></a><br><hr>
<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log Out</span></a>




</div>
                </div>
                <div class="col-sm-10">
                
                
                        
                        <?php
            $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
            /*if(!$conn){
                echo "not connected";
                }
                else echo "success";*/

                $sql="SELECT `DT`, `roll`, `name`, `email`, `field`, `upd` FROM `userreg`";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $u1=$row['DT'];
                    $u2=$row['roll'];
                    $u3=$row['name'];
                    $u4=$row['email'];
                    $u5=$row['field'];
                    $u6=$row['upd'];
                    
                    

                    
                    
                    ?>
                     
                     
                     <div class="card">
                         
                    <table>
                        <tr><th>Date & Time of Registration</th><td><input type="text"   value="<?php echo $u1 ?>" readonly> </td></tr>
                        <tr><th>User ID </th><td><input type="text"  name="DT" value="<?php echo $u2 ?>" readonly> </td></tr>
                        <tr><th>Name</th><td><input type="text"   value="<?php echo $u3 ?>" readonly> </td></tr>
                        <tr><th>Email id</th><td><input type="text"  value="<?php echo $u4 ?>" readonly> </td></tr>
                        <tr><th>Fiel of interest in technology</th><td><input type="text"   value="<?php echo $u5 ?>" readonly> </td></tr>
                        <tr><th>Medium of technews update</th><td><input type="text"   value="<?php echo $u6 ?>" readonly> </td></tr>
                        
                        <tr><td></td><td> <button class="button button1" onclick= deleteus()>Delete Account</button></td><tr>
                    </table></div>

                  
                
           <?php
                }
           ?>
                
        </div>
        </div>
        </div>
<body>
    <script>
        function deleteus(){
           
         var r = confirm("Are you sure ?");
         if (r == true) {
            window.location='deleteuser.php?roll=<?php echo $u2;?>' ;
         } 

        }
        
    </script>
</html>
<?php
}
else
{
    echo"<script>location.replace('firstpage.php');</script>";
//rediredt==ct
}

?>