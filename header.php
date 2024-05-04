<?php session_start(); ?>
<html lang="en">
<head>
<title>Grand Tour</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar()
		{
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-map-signs"></span> Grand Tour </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<?php if(isset($_SESSION['user'])) { ?>
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="about.php">About Us</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Packages
						</a>
						<ul  class="dropdown-menu" role="menu">
						
						  <li><a class="dropdown-item" href="visit.php?cid=1">Family Tours</a></li>
						  <li><a class="dropdown-item" href="visit.php?cid=2">Educational Tours</a></li>
						  <li><a class="dropdown-item" href="visit.php?cid=3">Bussiness Tours</a><li>
						  <li><a class="dropdown-item" href="visit.php?cid=4">Couple Tours</a></li>
						  <li><a class="dropdown-item " href="visit.php?cid=5">Kids Tours</a></li>
						</ul>
					</li>
					

				<li class=""><a href="contact.php">Contact</a></li>
				<li class=""><a href="status.php">Status</a></li>
		        <li class=""><a href="logout.php">Logout</a></li>
		        <li class="btn btn-info"><a href="">Welcome! <?php echo $_SESSION['user'];?></a></li>
			</ul>
			<?php } else { ?>
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="about.php">About Us</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Packages
						</a>
						<ul  class="dropdown-menu" role="menu">
						
						  <li><a class="dropdown-item" href="visit.php?cid=1">Family Tours</a></li>
						  <li><a class="dropdown-item" href="visit.php?cid=2">Educational Tours</a></li>
						  <li><a class="dropdown-item" href="visit.php?cid=3">Bussiness Tours</a><li>
						  <li><a class="dropdown-item" href="visit.php?cid=4">Couple Tours</a></li>
						  <li><a class="dropdown-item " href="visit.php?cid=5">Kids Tours</a></li>
						</ul>
					</li>
				<li class=""><a href="contact.php">Contact</a></li>
		        <li class=""><a href="login.php">Login</a></li>
		        <li class="booking"><a href="booking.php">Book Now</a></li>
			</ul>
			<?php } ?>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
</body>
</html>