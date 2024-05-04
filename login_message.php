<?php
  $n=$_REQUEST['name'];
  $e=$_REQUEST['email'];
  $ph=$_REQUEST['phone'];
  $m=$_REQUEST['message'];
  $con=mysqli_connect("localhost","root","","traval");
  $query="insert into 
  `comments`(`name`,`email`,`phone`,`message`)values
  ('$n','$e','$ph','$m')";
   $result=mysqli_query($con,$query);
   if($result>0)
     {
       echo "<script>window.location.assign('contact.php?x=1')</script>";
     }
   else
     {
         echo "<script>window.location.assign('contact.php?x=0')</script>";
       //echo mysqli_error($con);
     }
?>
