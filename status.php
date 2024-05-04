<?php include "header.php"; ?>
<?php include "banner.php"; ?>
<!-- places -->
<section class="trav-grids py-5" id="desti">
	<div class="container-fluid py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4">Request Status </h3>
		<div class="row">
			<div class="col-md-12 mt-4">
				<table class="table table-bordered table-striped table-hover">
				<thead class="thead-dark">
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Name</th>
					  <th scope="col">Email</th>
					  <th scope="col">Phone</th>
					  <th scope="col">Date</th>
					  <th scope="col">Adult</th>
					  <th scope="col">Kids</th>
					  <th scope="col">Message</th>
					  <th scope="col">Place</th>
					  <th scope="col">Hotel</th>
					  <th scope="col">Room No.</th>
					  <th scope="col">Check In</th>
					  <th scope="col">Check Out</th>
					  <th scope="col">Status</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
					include "config.php";
					$email=$_SESSION['email'];
					$q="select *,book.status,package.vplace,hotel.hname,room.room_no from `book` INNER JOIN `package` ON book.pid=package.pid INNER JOIN `hotel` ON book.hid=hotel.hid INNER JOIN `room` ON book.room_id=room.rid where book.email='$email' ";
					$res=mysqli_query($con,$q);
					$t=1;
					while($arr=mysqli_fetch_array($res)){
						
				  ?>
					<tr>
					  <th scope="row"><?php echo $t; ?></th>
					  <td><?php echo $arr['name']; ?></td>
					  <td><?php echo $arr['email']; ?></td>
					  <td><?php echo $arr['phone']; ?></td>
					  <td><?php echo $arr['date']; ?></td>
					  <td><?php echo $arr['adult']; ?></td>
					  <td><?php echo $arr['kids']; ?></td>
					  <td><?php echo $arr['message']; ?></td>
					  <td><?php echo $arr['vplace']; ?></td>
					  <td><?php echo $arr['hname']; ?></td>
					  <td><?php if($arr['room_id']!=0)
								echo $arr['room_no']; 
						?></td>
					  <td><?php echo $arr['check_in']; ?></td>
					  <td><?php echo $arr['check_out']; ?></td>
					  <td><?php echo $arr['status']; ?></td>
					</tr>
					<?php $t++;}?>
				  </tbody>
			</table>
			</div>
		</div>
	</div>
</section>
<?php include "footer.php"; ?>
