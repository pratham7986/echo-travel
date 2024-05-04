<?php
	include"config.php";

	$id = $_REQUEST['id'];
	
	$q="select * from `hotel` where pid = '$id'";
	
	$result = mysqli_query($con,$q);
	
?>
<select class="form-control" placeholder="Name" required="" name="hid">
	<option selected disabled>Select Hotel</option>
	<?php
		while($arr=mysqli_fetch_array($result)){
	?>
	<option value="<?php echo $arr['hid']; ?>"><?php echo $arr['hname']; ?></option>
	<?php }?>
</select>