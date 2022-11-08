<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
body{
    margin: 0 auto;
    max-width:800px;
    padding:0 20px;
    background-image:url(f7.jpg);
    
}
.container1{
    border:2px solid #FD5DA8;
    background-color:#FEC5E5;
    border-radius:5px;
    padding:10px;
    margin:10px 0;
    height:100px;
}

.darker{
    border-color:#78C0F0;
    background-color:#D8F0FF;

}
.container1::after{
    content:"";
    clear:both;
    display:table;
}
.container1 img{
    float:right;
    max-width:50px;
    width:100%;
    margin-right:20px;
    border-radius:50px;
}
.container1 img.right{
    float:right;
    margin-left:20px;
    margin-right:0;

}
.time-right{
    float:left;
    color:#aaa;
}
.time-left{
    float:left;
    color:#999;
}
div.sticky{
    position:-webkit-sticky;
    position:sticky;
    bottom:0;
    margin-top:200px;
    background-color:#ddd;
    padding:10px 0 0 10px;
    font-size:20px;
}
.square{
    height:auto;
    width:700px;
    padding:8px;
    border:2px solid #dedede;
    background-image:url(chatback.jpg);
    margin-left:180px;
    margin-top:-700px;
}
h2{
    font-family:Freestyle script;
    background-color:white;
}
.refresh{
    height:70px;
    width:100px;
    background-color:black;
    color:white;
    border-radius:20px;
    border-width:10px;
}
.qa{
    background-color:white;
    width:450px;
    margin-left:-320px;
    height:700px;
    margin-top:10px;
    border-radius:20px;
    border-width:3px;
    border-style:ridge;
    border-color:black;

}
</style>
</head>
<body>
<div class="qa">
<center><b><u>You may ask these questions!</u></b></center>
Hi<br>
Are the all the experts on this website acclaimed and verified?<br>
How the users can contact with the experts?<br>
Who can add post on techbustle ?<br>
Can expert follow any one ?<br>
What can experts upload on  Techbustle ?


</div>
<span id="ref">
<div class="square">
<center><h2>Chat Messages</h2></center>
<br/>
<center><button class="refresh" onclick="delete_message()">REFRESH</button></center><br/>
<?php
  $query="select * from chats ORDER by date DESC";
  $res=mysqli_query($conn,$query);
  while($data=mysqli_fetch_array($res)){
      $user=$data['user'];
      $chatbot=$data['chatbot'];
      $date=$data['date'];
      ?>
<div class="container1" style="margin-right: 400px;">
<img src="user.jpg" alt="You" style="width:100%;">
<p id="message"><?php echo $user;?></p>
<span class="time-right"><?php echo $date;?></span>
</div>
<div class="container1 darker" style="margin-left:400px;">
<img src="fol4.jpg" alt="Techbuddy" class="right" style="width:100%;">
<p><?php echo $chatbot;?></p>
<span class="time-left"><?php echo $date;?></span>
</div>
<?php } ?>
<div class="sticky">
<div class="row">
 <div class="col-md-12">
   <div class="input-group mb-3">
    <input type="text" class="form-control" id="msg">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="send()">SEND</button>
            </div>
       </div>
       </div>
       </div>
       </div>
       </div>
       </span>
       <br/>
       <script type="text/javascript">
       function send(){
           var text=$('#msg').val().toLowerCase();
           $.ajax({
               type:"post",
               url:"mysearch.php",
               data:{text:text},
               success:function(data){
                   $('#ref').load(' #ref');
                  // alert(text);
                   //alert(data);
               }
           });
       }     
       function delete_message(){
           $.ajax({
                
                type:"post",
                url:"delete_message.php",
                success:function(data){
                    $('#ref').load(' #ref');
                }
           });
       }
       </script>
       </body>
</html>
