<?php include"header.php"; ?>
<?php include"banner.php"; ?>
<?php
	if(!isset($_SESSION['user']))
	{
		echo "<script>window.location.assign('login.php?x=2')</script>";
	}
?>
<?php
  $n=$_REQUEST['name'];
  $e=$_REQUEST['email'];
  $ph=$_REQUEST['phone'];
  $d=$_REQUEST['date'];
  $a=$_REQUEST['adult'];
  $k=$_REQUEST['kids'];
  $m=$_REQUEST['message'];
  $s="Pending";
  $pid=$_REQUEST['pid'];
  $hid=$_REQUEST['hid'];
  include "config.php";
  $query="insert into 
  `book`(`name`,`email`,`phone`,`date`,`adult`,`kids`,`message`,`status`,`pid`,`hid`)values
  ('$n','$e','$ph','$d','$a','$k','$m','$s','$pid','$hid')";
   $result=mysqli_query($con,$query);
   if($result>0)
    {
		echo "<div style='margin-left:250px;margin-top:100px;height:500px;width:800px;'class='alert alert-success'><div style='margin-left:100px;margin-top:100px;height:280px;width:600px;' class='alert alert-dark'><p style='text-align:center;font-size:50px;margin-top:40px;float:left;'>Your booking is done. Enjoy the Services</p></div></div>";
       
     }
   else
     {
        echo "<script>window.location.assign('booking.php?x=0')</script>";
     }
?>
<?php include"footer.php";?>