<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<!-- Contact -->
<section class="contact py-5">
<?php
	if(isset($_REQUEST['x']))
	{	if($_REQUEST['x']==0){
			echo"<div class='alert alert-danger text-center'><strong>Failed! </strong>Try Again</div>";
		}
		else{
			echo"<div class='alert alert-success text-center'><strong>Success! </strong>Message Sent.</div>";
		}
	}
?>
	<div class="container py-lg-5 py-sm-3">
			<h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Get In Touch with us</h2>
			<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Location</h6>
                    <p>Grand Tour
                        <br>Location : 400063 'E' Wing,Lotus corporate park,goregaon(east) Mumbai</p>
			</p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Phone & Email</h6>
                    <p>1800-102-5444</p>
                    <a href="mailto:info@example.com" class="mail">feedback@grandtour.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">

                    <div class="adress-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>

                    <h6>Stay In Touch</h6>
					<ul class="social_section_1info mt-2">
						<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
                </li>
            </ul>
			

			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form action="login_message.php" method="post">
							<?php if(isset($_SESSION['email']))
							{ ?>
							<div class=" form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Name" value="<?php echo $_SESSION['user']; ?>" readonly required="" name="name">
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" readonly required="" name="email">
							</div>
							<?php }else{?>
							<div class=" form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Name" required="" name="name">
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" placeholder="Email" required="" name="email">
							</div>
						<?php }?>
							<div class="form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Phone" required="" name="phone"> 
							</div>
							<div class="form-group contact-forms">
							  <textarea class="form-control" placeholder="Message" rows="3" required="" name="message"></textarea>
							</div>
							<button class="btn btn-block sent-butnn">Send</button>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
						<h4>Do you have any questions about us? write to us.</h4>
						<p class="mt-md-4 mt-2">If you have any query regarding touror any other such as offers,expert groups,srvices,discounts as well as any other query you can easily send mail to us or any social media comments or phone also.</p>
						<h5 class="mt-lg-5 mt-3">Office Hours</h5>
						<p class="mt-3">Monday to Friday : 09 am to 06 pm</p>
						<p>Saturday and Sunay : 10 am to 04 pm</p>
					</div>
				</div>
			</div>
			
			
			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-12 col-md-12 contact-left-form">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.565835151787!2d75.9564699147237!3d31.481127331382634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ae45e70000001%3A0x323b916e8b4d0287!2sRayat%20-%20Bahra%20Institute%20of%20Engineering%20%26%20Nano-Technology!5e0!3m2!1sen!2sin!4v1604586705007!5m2!1sen!2sin" width="1050" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
	</div>
</section>
<!-- //Contact -->

<?php include "footer.php"; ?>