<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
<!doctype html>
<html lang="en">
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
		<title>Log In here</title>
<style>
  .has-error .help-block {
  color: red;
}
  </style>

	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="#">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="aboutlaw.php">About Law</a>
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
			<div class="container">
			<img class="img-fluid" alt="Responsive image" src="images/aboutlaw.jpg">
			</div>
			<div class="container mt-5">
				<p>
					গণপ্রজাতন্ত্রী বাংলাদেশের সংবিধানের প্রস্ত্মাবনার অথবা ৮, ৪৮, ৫৬, ৫৮, ৮০, ৯২ক বা ১৪২ অনুচ্ছেদ সংশোধনের ব্যবস্থা করিয়া কোন বিল উক্ত সংবিধানের ১৪২(১) অনুচ্ছেদ অনুযায়ী সংসদে গৃহীত হইবার পর উহাতে রাষ্ট্রপতি সম্মতিদান করিবেন কি করিবেন না এই প্রশ্নটি যাচাইয়ের জন্য গণভোটের বিধান প্রণয়নকল্পে প্রণীত আইন৷যেহেতু গণপ্রজাতন্ত্রী বাংলাদেশের সংবিধানের প্রস্ত্মাবনার অথবা ৮, ৪৮, ৫৬, ৫৮, ৮০, ৯২ক বা ১৪২ অনুচ্ছেদ সংশোধনের ব্যবস্থা করিয়া কোন বিল উক্ত সংবিধানের ১৪২(১) অনুচ্ছেদ অনুযায়ী সংসদে গৃহীত হইবার পর উহাতে রাষ্ট্রপতি সম্মতিদান করিবেন কি করিবেন না এই প্রশ্নটি যাচাইয়ের জন্য সংবিধানের ১৪২(১ক) অনুচেছদ মোতাবেক গণভোটের বিধান করা সমীচীন ও প্রয়োজনীয়;সেহেতু এতদ্ দ্বারা নিম্নরূপ আইন করা হইল:-
				</p>
				<a class="my-5 btn btn-primary"  href="http://bdlaws.minlaw.gov.bd/volume-29.html" target="__blank">For More....</a>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>All rights reserved by Bapon Sarkar  
							<script>document.write(new Date().getFullYear());</script>
						</h5>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>


	</body>
</html>
