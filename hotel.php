<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<?php
$pid=$_REQUEST['pid'];
$con=mysqli_connect("localhost","root","","traval");
$q="select * from `hotel` where pid='$pid' ";
$result=mysqli_query($con,$q);

//$arr=mysqli_fetch_array($result);
?>
<!-- places -->
<section class="trav-grids py-5" id="desti">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4">Hotels</h3>
		<div class="row">
		<?php while($arr=mysqli_fetch_array($result)){?>
			<div class="offset-md-2 col-lg-6 mt-4">
				<div class="grids-tem-one">
				
					<div class="row">
					  <div class="col-sm-5 grids-img-left">
						 	<img src="images/<?php echo $arr['pic']; ?>" style="height:400px;width:600px;" alt="" class="img-fluid">
						  </a>
						  
						</div>
						<div class="col-sm-5 right-cont">
							<h4 class="mb-2 let mt-sm-0 mt-2 tm-clr"><?php echo $arr['hname'];?></h4>
							
							</a>
							<ul class="d-flex">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p class="mt-3"><u>Description:</u><?php echo $arr['hdescription']; ?></p>
							<p class="mt-3"><u>Price:</u><?php echo $arr['price']; ?></p>
						</div>
						<div class="col-sm-2 right-cont">
													
							<a href="booking.php?hid=<?php echo $arr['hid'];?>&pid=<?php echo $pid;?>"><input style="margin-top:390px;" type="button" class="btn btn-primary" value="Book"></a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?> 
	</div>
</section>
<?php include "footer.php"; ?>
