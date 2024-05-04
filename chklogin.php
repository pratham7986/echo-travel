<?php
session_start();
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","traval");
$query="select * from `register` where email='$e' and password='$p'";
$result=mysqli_query($con,$query);
   if($arr=mysqli_fetch_array($result))
    {
	  $_SESSION['user']=$arr['username'];
	  $_SESSION['email']=$e;
	  echo "<script>window.location.assign('index.php')</script>";
    }
  else
   { 
     echo "<script>window.location.assign('login.php?x=0')</script>";
   }
?>
