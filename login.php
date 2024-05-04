<?php include"header.php"; ?>
<?php include"banner.php"; ?>
<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Login Here</h2>
		<?php
			if(isset($_REQUEST['x']))
			{
				if($_REQUEST['x']==1)
				{
					echo "<div class='alert alert-success' style='text-align:center;'><strong>Account created. </strong> Please Login for further procedure.</div>";
				}
				elseif($_REQUEST['x']==2){
					echo "<div class='alert alert-danger' style='text-align:center;'><strong> Login First</strong></div>";
				}
				else{
					echo "<div class='alert alert-danger' style='text-align:center;'><strong>Failed To Login</strong>Try again.</div>";
				}
			}
		?>
		<br>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
					<form action="chklogin.php" method="post" class="row">
						
						<div class="col-sm-12 form-group contact-forms">
						  <input type="email" class="form-control" placeholder="Email" required="" name="email">
						</div>
						<div class="col-sm-12 form-group contact-forms">
						  <input type="password" class="form-control" placeholder="Password" required="" name="password"> 
						</div>
					    <div class="col-md-12 form-group booking-button">
							<button type="submit" class="btn btn-block sent-butnn">Login</button>
						</div>
						<div class="col-md-8 form-group booking-button">
							<p>If you are not already registered then
						</div>
						<div class="col-md-4 form-group booking-button">
							<a href="register.php" class="btn btn-block sent-butnn btn-primary">Click Here</a>
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
<?php include"footer.php"; ?>