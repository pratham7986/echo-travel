<?php include"header.php"; ?>
<?php include"banner.php"; ?>
<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Register Here</h2>
		<?php
			if(isset($_REQUEST['x']))
			{
				if($_REQUEST['x']==0)
				{
					echo "<div class='alert alert-danger' style='text-align:center;'><strong>Failed To create account</strong>Try again.</div>";
				}
			}
		?>
		<br>	
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
					<form action="login_insert.php" method="post" class="row">
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Username" required="" name="username">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="email" class="form-control" placeholder="Email" required="" name="email">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Phone" required="" name="phone"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="password" class="form-control" placeholder="Password" required="" name="password"> 
						</div>
						<div class="col-md-12 form-group contact-forms">
						  <textarea class="form-control" placeholder="Address" rows="3" required="" name="address"></textarea>
						</div>
						<div class="col-md-12 booking-button">
							<a href="login.php"><button class="btn btn-block sent-butnn">Register</button></a>
						</div>
					</form>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="images/banner1.jpg" alt="" class="img-fluid" />
						<p><span class="fa fa-tags"></span> <span>15%-20% off</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Booking -->
<?php include"footer.php"; ?>