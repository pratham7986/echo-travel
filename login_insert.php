<?php
  $n=$_REQUEST['username'];
  $e=$_REQUEST['email'];
  $ph=$_REQUEST['phone'];
  $p=$_REQUEST['password'];
  $co=$_REQUEST['address'];
  $con=mysqli_connect("localhost","root","","traval");
  $query="insert into 
  `register`(`username`,`email`,`phone`,`password`,`address`)values
  ('$n','$e','$ph','$p','$co')";
   $result=mysqli_query($con,$query);
   if($result>0)
     {
       echo "<script>window.location.assign('login.php?x=1')</script>";
	   
     }
   else
     {
        echo "<script>window.location.assign('register.php?x=0')</script>";
      
     }
?>
