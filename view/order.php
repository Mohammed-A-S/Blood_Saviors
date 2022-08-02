<?php
session_start();
include '../inc/connection-inc.php';

//user
$email = $_SESSION['email'];
$users_all = "SELECT * FROM users WHERE EMAIL='$email'";
$users_query = mysqli_query($conn, $users_all);

$all_orders = "SELECT * FROM orders WHERE EMAIL='$email'";
$orders_query = mysqli_query($conn, $all_orders);
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

	<title>Order</title>
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

					<h1>Order</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Order</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Your order List</a>
						</li>
					</ul>
				</div>
			</div>

		<?php include "../config/counter_html.php"; ?>

		<!-- first box -->
		<div class="table-data">
			<div class="order">
			<form action="order.php" method="POST">
			<div class="head">
					<h3>New order</h3>
					<button class="box_button_D_V1" id="show1"><p>NEW</p></button>
				</div>
				<div class="hide_new_order" id="adding1"><!--NEW div for jQuery-->
					<div class="head">
						<h3>Add New Order</h3>
						<button class="box_button_D_V" name="new_order"><p>+Order</p></button>
					</div>
					<table>
						<tr>
							<th> ID </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
							<th> Amount </th>
							<th> Hospital </th>
							<th> Email </th>
							<th style="display: none;"> Status </th>
						</tr>

						<?php while($row2 = mysqli_fetch_array($users_query)): //the end of the loop is down?> 
							<tr style=background-color:#fafafa;>
								<td> <?php echo $row2['ID']; ?></td>
								<td> <?php echo $row2['USER_NAME']; ?></td>
								<td> <?php echo $row2['GENDER']; ?></td>
								<td> <?php echo $row2['BLOOD_TYPE']; ?></td>
								<td>
									<select name="amount" required>
										<option value="">---</option>
										<option value="2">2</option>
										<option value="4">4</option>
										<option value="6">6</option>
										<option value="8">8</option>
										<option value="10">10</option>
									</select>
								</td>
								<td>
									<select name="hospital" required>
										<option value="">---</option>
										<option value="Mohamed Ben Nasser">Mohamed Ben Nasser</option>
										<option value="Jazan Public Hospital">Jazan Public Hospital</option>
										<option value="King Fahad Hospital">King Fahad Hospital</option>
									</select>
								</td>
								<td> <?php echo $row2['EMAIL']; ?></td>
								<td style="display: none;">
									<select name="status" required>
										<option value="wait">---</option>
									</select>
								</td>
							</tr>
						<?php endwhile; ?>
						</form>
					</table>
				</div>
			</div>
		</div>

		
		<!-- second box -->
		<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>Your order List</h3>
				</div>
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
	</main>
	<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<!-- scripts -->
	<script src="../script/script.js"></script>
	<script src="../script/jQscript.js"></script>
</body>
</html>