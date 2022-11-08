<?php
include"db.php";
if(isset($_POST['text'])){
 $msg=$_POST['text'];
$query=mysqli_query($conn,"select * from question where question RLIKE '[[:<:]]".$msg."[[:>:]]'");
$count=mysqli_num_rows($query);

    if($count=="0"){
        $data="I am sorry but i am not exactly clear how to help you";
        $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')
        ");
    }else{
        while($row=mysqli_fetch_array($query)){
            $data=$row['answer'];
            $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')
            ");
        }
    }
    
}
?>