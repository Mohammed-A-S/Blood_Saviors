<?php
session_start();
include '../inc/connection-inc.php';

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
	<link rel="stylesheet" href="../style/style.css">
	<!-- Font-awesome -->
	<link rel="stylesheet" type="text/css" href="/external_links/font-awesome.css">

	<title>BLOOD BANK</title>
</head>
<body>
	<!-- SIDEBAR -->
	<?php
		include "../sidebar_links/user_links.php";
	?>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include "../config/users_nav_html.php"; ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<!-- counter -->
		<main>
			<div class="head-title">
				<div class="left">
					<?php include '../inc/order-inc.php'; ?>
					<h1>Blood Bank</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Blood Bank</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Blood List</a>
						</li>
					</ul>
				</div>
			</div>

		<?php include "../config/counter_html.php"; ?>

		<!-- blood bank -->
		<?php include "../config/blood_bank_html.php"; ?>
		<!-- MAIN -->

		
	</section>
	<!-- CONTENT -->

	
	<script src="../script/script.js"></script>
</body>
</html>