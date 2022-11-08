<?php

session_start();
$H=$_POST['head'];
$D=$_POST['desc'];
$C=$_POST['cat'];

if(!isset($_SESSION['id'])){
$user="Admin";
$id="1";
$useremail="admin@g";
}
else{
$user=$_SESSION['name'];
$id=$_SESSION['j'];
$useremail=$_SESSION['e'];

}
$conn=mysqli_connect("localhost","ojttplabz","ojt@tplabz","tplabzENEWS");

    
if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','mp4');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize<100000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'feed/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "<script>alert('Uploaded'); </script>";
                $sql="INSERT INTO `feed`(`email`,`eroll`,`author`, `head` , `category`, `desc`, `filename`, `filetype`, `likes`) VALUES ('$useremail',$id,'$user','$H','$C','$D','$fileNameNew','$fileActualExt',0)";
                $result=mysqli_query($conn, $sql);
                if(!$result){
                    echo "<script>alert('Update failed');</script>";

                }
                //header("Location:feedinsert.html?uploadsuccess");
            }else{
                echo "<script>alert('Your File is too big !!');</script>";

            }
        } 
        else{
            echo "<script>alert('There was an error!!');</script>";
        }}}
   
        echo"<script> window.location='addfeed.html'</script>";
    
       
?>


