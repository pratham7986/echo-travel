<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<?php
$hid=$_REQUEST['hid'];
$con=mysqli_connect("localhost","root","","traval");
$q="select * from `hotel` where hid='$hid' ";
$result=mysqli_query($con,$q);

//$arr=mysqli_fetch_array($result);
?>
<!-- places -->
<section class="trav-grids py-5" id="desti">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4">Hotels</h3>
		<div class="row">
		<?php while($arr=mysqli_fetch_array($result)){?>
			<div class="col-lg-6 mt-4">
				<div class="grids-tem-one">
				
					<div class="row">
						<div class="col-sm-7 right-cont">
							<h4 class="mb-2 let mt-sm-0 mt-2 tm-clr"><?php echo $arr['hname'];?></h4>
							<ul class="d-flex">
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
								<li><span class="fa fa-star"></span></li>
							</ul>
							<p class="mt-3"><?php echo $arr['hdescription']; ?></p>
						</div>
					</div>
					<div class="col-sm-9 form-group contact-forms">
							<select class="form-control" id="adults">
								<option><span>Select Room</span></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
							</select>
						</div>
						<div class="col-md-9 booking-button">
							<a href="booking.php"><button class="btn btn-block sent-butnn">Book Now</button></a>
						</div>

				</div>
			</div>
		<?php } ?> 
	</div>
	</div>
</section>
<?php include "footer.php"; ?>
