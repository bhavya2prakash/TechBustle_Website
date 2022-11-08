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





/* Style the counter cards */
.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 26px;
text-align: center;
background-color: #f1f1f1;
}
.b1 {
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

.b1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.b1:hover {
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
<a href="admindash.php"><i class="fa fa-check" aria-hidden="true"></i><span>Dashboard</span></a><hr><br>
    <a href="verify.php"><i class="fa fa-check" aria-hidden="true"></i><span>Verify Expert</span></a>
    <a href="expertmanage.php"><i class="fa fa-plus" aria-hidden="true"></i><span>Manage Experts</span></a>
    <a href="usermanage.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Manage Users</span></a><br><hr><br>
    <a href="addfeed.html" target="_blank"><i class="fa fa-newspaper-o" aria-hidden="true" ></i><span>Add Posts</span></a><br>
    
    <a href="logout.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Log Out</span></a>
    
    
   
    
</div>
                    </div>
                    <div class="col-sm-10">

                    <div id="post" class="card">

</div>
                    <?php
            $conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");
            /*if(!$conn){
                echo "not connected";
                }
                else echo "success";*/

                $sql="SELECT * FROM `feed` ORDER BY `date` desc";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $f=$row['filename'];
                    $s=$row['filetype'];
                    $h=$row['head'];
                    $d=$row['desc'];
                    $pd=$row['postid'];
                    
                    
                    ?>
 
<script> 
              
var gd= document.createElement("div");
gd.setAttribute("class","col-sm-7");
document.getElementById("post").appendChild(gd);
if("<?php echo $s ;?>"=="jpg" ||"<?php echo $s ;?>"=="jpeg"||"<?php echo $s ;?>"=="png"  ){
               // gd.innerHTML="<?php echo $f ?>";
               gd.innerHTML="<?php echo $h;?>"
                var i=document.createElement("img");
               

               
                i.setAttribute("src","feed/<?php echo $f?>");
               
               
                i.style.height=500;
                i.style.width=800;
                i.style.padding=30;
                gd.appendChild(i);
              // document.write("<p>"<?php echo $d;?>"</p>");
               // gd.innerHTML="<?php echo $d;?>"
               var p= document.createElement('p');
               p.innerHTML="<?php echo $d;?>"
               document.getElementById("post").appendChild(p);
               var l= document.createElement('button');
               l.setAttribute("class","b1");
               l.setAttribute("onclick","deletepost(<?php echo $pd;?>)");
               l.setAttribute("id","del");
               l.innerHTML="Delete";
            

               document.getElementById("post").appendChild(l);
               
                var h= document.createElement('hr');
                document.getElementById("post").appendChild(h);
                }
                else if ("<?php echo $s ;?>"=="mp4"){
                    gd.innerHTML="<?php echo $h;?>"
                var v=document.createElement("video");
                v.setAttribute("src","feed/<?php echo $f?>");
                v.setAttribute("controls", "controls");
                v.style.height=500;
                v.style.width=800;
                v.style.padding=30;
                gd.appendChild(v);
                var p= document.createElement('p');
               p.innerHTML="<?php echo $d;?>"
               document.getElementById("post").appendChild(p);
               var l= document.createElement('button');
               l.setAttribute("class","b1");
               l.setAttribute("onclick","deletepost(<?php echo $pd;?>)");
               l.setAttribute("id","del");
               l.innerHTML="Delete";
               
               document.getElementById("post").appendChild(l);
             
                var h= document.createElement('hr');
                document.getElementById("post").appendChild(h);
                }
              
                
          
            </script>
                  
                
           <?php
                }
           ?>
</div>
            </div>
            </div>
<body>
    <script>
        
function deletepost(delid){
           
           var r = confirm("Are you sure ?");
           if (r == true) {
            senddata='id='+delid;
                    var xhttp = new XMLHttpRequest();
                   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        
    }
  };
  xhttp.open("POST", "deletepost.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(senddata);
  
              
           } 
           location.reload();
  
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