<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logout Successful');</script>";
echo"<script>location.replace('firstpage.php');</script>";
readline_clear_history () ;
?>