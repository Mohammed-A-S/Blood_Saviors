<?php
session_start();
	include 'inc/connection-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/register_and_login.css">
	<!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/external_links/font-awesome.css">

	<title>LOGIN</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-droplet'></i>
			<span class="text">BLOOD SAVIORS</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php" name="login">
					<i class='bx bxs-droplet' ></i>
					<span class="text">Login</span>
				</a>
			</li>
			<li>
				<a href="view/register.php" name="register">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Register</span>
				</a>
			</li>
		</ul>
		
	</section>
	<!-- SIDEBAR -->





	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<div>
				<h1 name="user_profile_name">----------</h1>
			</div>
			<div class="profile">
				<img src="img/profile.png">
			</div>
			

		</nav>
		<!-- NAVBAR -->





		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Login</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Login</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Login Form</a>
						</li>
					</ul>
				</div>
			</div>

			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Login Form</h3>
					</div>
					<?php include 'inc/login_form-inc.php'; ?>
					<div class="wrapper">
						<form class="form" action="index.php" method="POST">
							<div class="inputfield" id="access_check" >
								<label>Access</label>
								<span id="user_fild"><input type="radio" class="input" id="user_access"><p>User</p> </span>
								<span id="hsptl_fild"><input type="radio" class="input" id="hsptl_access"><p>Hospital</p> </span>
							</div> 


							<div id="login_user">
							<div class="inputfield">
								<label>Email</label>
								<input type="text" class="input" name="user_email">
							</div> 
							<div class="inputfield">
								<label>Password</label>
								<input type="password" class="input" name="user_pwd">
							</div>
							<div class="inputfield">
								<input type="submit" value="Submit" class="btn" name="submit_user">
							</div>
							</div>


							<div id="login_hsptl">
							<div class="inputfield">
								<label>Hospital ID</label>
								<input type="text" class="input" name="hsptl_id">
							</div>
							<div class="inputfield">
								<label>Password</label>
								<input type="password" class="input" name="hsptl_pwd">
							</div>
							<div class="inputfield">
								<input type="submit" value="Submit" class="btn" name="submit_hsptl">
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->

		
	</section>
	<!-- CONTENT -->

	
	<script src="script/script.js"></script>
	<script src="script/jQscript.js"></script>
	
</body>
</html>