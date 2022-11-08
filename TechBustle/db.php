<?php
$servername="localhost";
$username="ojttplabz";
$password="ojt@tplabz";
$dbname="tplabzchatbot";
$server_time=date('Y-m-d H:i:s');

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn){
  //  echo "connected";
}else{
    echo "failed to connect";
}
?>