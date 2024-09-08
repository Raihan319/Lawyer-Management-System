<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
<!doctype html>
<html lang="en" style="scroll-behavior: smooth;">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title></title>
	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="index.php">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="#aboutus">About Us</a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<li class="">
											<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Logout</a>
										</li>
										<?php }else{ ?>
										<li class="">
											<a class="nav-link cus-a" href="login.php">Login</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Register
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
												<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->
											</div>
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Slider 1.png" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    		<h5>Cour Cases</h5>
    		<p>It is all about management</p>
  		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Slider 2.png" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
    		<h5>Cour Cases</h5>
    		<p>It is all about management</p>
  		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Slider 3.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    		<h5>Cour Cases</h5>
    		<p>It is all about management</p>
  		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</section>

		<section class="aboutus" id="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-md-12  my-5">
						<h1 class="text-center">About US</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vitae  consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vita similique iusto temporibus nihil ducimus repellendus alias eos!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vitae  consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vita similique iusto temporibus nihil ducimus repellendus alias eos!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vitae  consectetur adipisicing elit. Explicabo debitis magni minus neque, sit culpa, placeat velit aperiam ea sunt eaque vita similique iusto temporibus nihil ducimus repellendus alias eos!</p>
						<div class="text-center">
						<h2>Our Contact details </h2>
						<h4>Address - Pundra University of Science and Technology (PUB)</h4>
						<h4>Contact no. -  01713-377076</h4>
						</div>
					</div>

					<div class="col-md-8">
						<iframe style="margin-left: 18rem; margin-bottom: 5rem;border: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.28639834168!2d89.34683721494093!3d24.922311548913722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcff6dad46983f%3A0x32606b40b622acdb!2sPundra%20University%20of%20Science%20and%20Technology%20(PUB)!5e0!3m2!1sen!2sbd!4v1649437116520!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>All rights reserved by Bapon Sarker 2022</h5>
					</div>
				</div>
			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
