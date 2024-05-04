<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<?php
	if(!isset($_SESSION['user']))
	{
		echo "<script>window.location.assign('login.php?x=2')</script>";
	}
	include"config.php";
	$q1="select * from `register`";
	$r1=mysqli_query($con,$q1);	
	$a1=mysqli_fetch_array($r1);
?>

<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Book Your Tour</h2>
		<?php
	if(isset($_REQUEST['x']))
	{	if($_REQUEST['x']==0){
			echo"<div class='alert alert-danger'style='text-align:center;'><strong>Something Went Wrong! </strong>Try Again.</div>";
		}
	}
?>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
					<form action="booktour.php" method="post" class="row">
					<?php 
						if(isset($_REQUEST['pid'])){
					?>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="PID" required="" name="pid" hidden value="<?php echo $_REQUEST['pid']; ?>">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" value="<?php echo $_REQUEST['hid']; ?>" hidden class="form-control" placeholder="HID" required="" name="hid">
						</div>
					<?php } else {
						include "config.php";
						$q="select * from `package`";
						$r=mysqli_query($con,$q);
					?>
						<div class="col-sm-6 form-group contact-forms">
						  <select class="form-control" placeholder="Name" required="" name="pid" onchange="get(this.value)">
							<option selected disabled>Select Place</option>
							<?php
								while($arr=mysqli_fetch_array($r)){
							?>
							<option value="<?php echo $arr['pid']; ?>"><?php echo $arr['vplace']; ?></option>
							<?php }?>
						  </select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <select class="form-control" placeholder="Name" required="" id="hotel" name="hid">
							<option selected disabled>Select Hotel</option>
							
						  </select>
						</div>
					<?php }?>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Name" required=""readonly name="name" value="<?php echo $_SESSION['user']; ?>">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="email" value="<?php echo $_SESSION['email']; ?>" readonly class="form-control" placeholder="Email" required="" name="email">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Phone" required="" name="phone" value="<?php echo $a1['phone']; ?>" readonly> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="date" class="form-control" placeholder="Date" required="" name="date"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="adults" name="adult">
								<option>Adults</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5 or more</option>
							</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="kids" name="kids">
								<option>Kids</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5 or more</option>
							</select>
						</div>
						<div class="col-md-12 form-group contact-forms">
						  <textarea class="form-control" placeholder="Message" rows="3" required="" name="message"></textarea>
						</div>
						<div class="col-md-12 booking-button">
							<button class="btn btn-block sent-butnn">Book Now</button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="images/banner1.jpg" alt="" class="img-fluid" />
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Booking -->


<script src="css/scripts/fetch_hotel.js"></script>
<?php include "footer.php"; ?>