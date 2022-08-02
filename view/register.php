<?php
session_start();
if(session_destroy())
{
	header("Locaation: ../index.php");
}
	include '../inc/connection-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../style/style.css">
 	<link rel="stylesheet" href="../style/register_and_login.css">
	<!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/external_links/font-awesome.css">

	<title>BLOOD BANK</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-droplet'></i>
			<span class="text">BLOOD SAVIORS</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="../index.php">
					<i class='bx bxs-droplet' ></i>
					<span class="text">Login</span>
				</a>
			</li>
			<li class="active">
				<a href="register.php">
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
			<a href="#" class="profile">
				<img src="../img/profile.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Register</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Register</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Register Form</a>
						</li>
					</ul>
				</div>
			</div>

			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Register Form of User</h3>
						<?php include '../inc/register_form-inc.php'; ?>
					</div>
					<div class="wrapper">
						<form class="form" action="register.php" method="POST">
							<div class="inputfield">
								<label>User Name</label>
								<input type="text" class="input" name="username">
							</div>
							<div class="error" name="error"><?php echo $errors['username']; ?></div>

							<div class="inputfield">
								<label>Gender</label>
								<div class="custom_select">
									<select name = "gender">
										<option value="">-- SELECT YOUR GENDER --</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="error" name="error"><?php echo $errors['gender']; ?></div>

							<div class="inputfield">
								<label>Blood Type</label>
								<div class="custom_select">
									<select name="blood_type">
										<option value="">-- SELECT BLOOD TYPE --</option>
										<option value="A+">A+</option>
										<option value="B+">B+</option>
										<option value="O+">O+</option>
										<option value="AB+">AB+</option>
										<option value="A-">A-</option>
										<option value="B-">B-</option>
										<option value="O-">O-</option>
										<option value="AB-">AB-</option>
									</select>
								</div>
							</div>
							<div class="error" name="error"><?php echo $errors['blood_type']; ?></div>

							<div class="inputfield">
								<label>Blood Disease</label>
								<div class="custom_select">
									<select name="blood_dis">
										<option value="">-- SELECT BLOOD DISEASE --</option>
										<option value="no disease">No Blood Disease</option>
										<option value="Anemia">Anemia</option>
										<option value="Hemophilia">Hemophilia</option>
										<option value="Leukocytosis">Leukocytosis</option>
										<option value="Polycythemia vera">Polycythemia vera</option>
										<option value="Sickle cell disease">Sickle cell disease</option>
										<option value="Thalassemia">Thalassemia</option>
										<option value="Von Willebrand disease">Von Willebrand disease</option>
									</select>
								</div>
							</div>
							<div class="error" name="error"><?php echo $errors['blood_dis']; ?></div>

							<div class="inputfield">
								<label>Email</label>
								<input type="text" class="input" name="email">
							</div>
							<div class="error" name="error"><?php echo $errors['email']; ?></div>

							<div class="inputfield">
								<label>Password</label>
								<input type="password" class="input" name="pwd">
							</div>
							<div class="error" name="error"><?php echo $errors['pwd']; ?></div>
							<div class="inputfield">
								<input type="submit" value="Submit" class="btn" name="submit">
							</div>
            			</form>
        			</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->		
	</section>
	<!-- CONTENT -->
	<script src="../script/script.js"></script>
</body>
</html>