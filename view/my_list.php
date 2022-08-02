<?php
session_start();
include '../inc/connection-inc.php';

//user
$email = $_SESSION['email'];
$all_orders = "SELECT * FROM orders WHERE EMAIL='$email'";
$orders_query = mysqli_query($conn, $all_orders);

$all_donors = "SELECT * FROM donors WHERE EMAIL='$email'";
$donors_query = mysqli_query($conn, $all_donors);
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

	<title>My List</title>
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
					<h1>My List</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">My List</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Your Donate & order List</a>
						</li>
					</ul>
				</div>
			</div>

		<?php include "../config/counter_html.php"; ?>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Your Donation List</h3>
					</div>
                    <div class="volunteer-table">
					<table>
						<tr>
							<th> Donate no. </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
							<th> Blood diseases </th>
							<th> Email </th>
							<th> status </th>
						</tr>

						<?php while ($row3 = mysqli_fetch_array($donors_query)):?>
							<tr>
								<td> <?php echo $row3['DONATE_NUMBER']; ?> </td>
								<td> <?php echo $row3['USER_NAME']; ?> </td>
								<td> <?php echo $row3['GENDER']; ?> </td>
								<td> <?php echo $row3['BLOOD_TYPE']; ?> </td>
								<td> <?php echo $row3['BLOOD_DISEASE']; ?> </td>
								<td> <?php echo $row3['EMAIL']; ?> </td>
								<td> <?php echo $row3['STATUS']; ?> </td>
							</tr>
						<?php endwhile; ?>
					</table>
                    </div>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Your order List</h3>
					</div>
                    <div class="volunteer-table">
					<table>
						<tr>
							<th> Order no. </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
							<th> Amount </th>
							<th> Hospital </th>
							<th> Email </th>
							<th> status </th>
						</tr>

						<?php while ($row3 = mysqli_fetch_array($orders_query)):?>
						<tr>
							<td> <?php echo $row3['ORDER_NUMBER']; ?> </td>
							<td> <?php echo $row3['USER_NAME']; ?> </td>
							<td> <?php echo $row3['GENDER']; ?> </td>
							<td> <?php echo $row3['BLOOD_TYPE']; ?> </td>
							<td> <?php echo $row3['AMOUNT']; ?> </td>
							<td> <?php echo $row3['HOSPITAL']; ?> </td>
							<td> <?php echo $row3['EMAIL']; ?> </td>
							<td> <?php echo $row3['STATUS']; ?> </td>
						</tr>
					<?php endwhile; ?>
					</table>
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