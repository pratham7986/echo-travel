<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<?php
$cid=$_REQUEST['cid'];
$con=mysqli_connect("localhost","root","","traval");
$q="select * from `package` where cid='$cid'";
$result=mysqli_query($con,$q);

//$arr=mysqli_fetch_array($result);
?>
<!-- places -->
<section class="trav-grids py-5" id="desti">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4">Places</h3>
		<div class="row">
		<?php while($arr=mysqli_fetch_array($result)){?>
			<div class="col-lg-6 mt-4">
				<div class="grids-tem-one">
				
					<div class="row">
					
						<div class="col-sm-5 grids-img-left">
							<a href="hotel.php?pid=<?php echo $arr['pid']; ?>"><img src="images/<?php echo $arr['image']; ?>" style="height:200; width:400" alt="" class="img-fluid"></a>
						</div>
						<div class="col-sm-7 right-cont">
							<a href="hotel.php?pid=<?php echo $arr['pid']; ?>"><h4 class="mb-2 let mt-sm-0 mt-2 tm-clr"><?php echo $arr['vplace'];?></h4>
							<ul class="d-flex">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p class="mt-3"><?php echo $arr['description']; ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?> 
		<?php while($arr=mysqli_fetch_array($result)){?>
			<div class="col-lg-6 mt-4">
				<div class="grids-tem-one">
				
					<div class="row">
					
						<div class="col-sm-5 grids-img-left">
							<a href="hotel.php"><img src="images/<?php echo $arr['image']; ?>" height="300" alt="" class="img-fluid"></a>
						</div>
						<div class="col-sm-7 right-cont">
							<a href="hotel.php?cid=2"><h4 class="mb-2 let mt-sm-0 mt-2 tm-clr"><?php echo $arr['vplace'];?></h4>
							<ul class="d-flex">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p class="mt-3"><?php echo $arr['description']; ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<?php include "footer.php"; ?>
