<?php
session_start();
include '../inc/connection-inc.php';

$email = $_SESSION['email'];
$users_id = "SELECT ID FROM users WHERE EMAIL='$email'";
$id_query = mysqli_query($conn, $users_id);

$orders_all= "SELECT * FROM orders";
$orders_query = mysqli_query($conn, $orders_all);
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

	<title>All Orders</title>
</head>
<body>
	<!-- SIDEBAR -->
	<?php include "../sidebar_links/emp_links.php"; ?>
	<!-- SIDEBAR -->





	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include "../config/users_nav_html.php"; ?>
		<!-- NAVBAR -->





		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>All Orders</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">All Orders</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">List Of All Orders</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- COUNTER -->
			<?php include "../config/counter_html.php"; ?>
			<!-- COUNTER -->

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List Of All Orders</h3>
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
							<th>Actions</th>
						</tr>
						
						<?php while ($row = mysqli_fetch_array($orders_query)):?>
							<tr>
								<td> <?php echo $row['ORDER_NUMBER']; ?> </td>
								<td> <?php echo $row['USER_NAME']; ?> </td>
								<td> <?php echo $row['GENDER']; ?> </td>
								<td> <?php echo $row['BLOOD_TYPE']; ?> </td>
								<td> <?php echo $row['AMOUNT']; ?> </td>
								<td> <?php echo $row['HOSPITAL']; ?> </td>
								<td> <?php echo $row['EMAIL']; ?> </td>
								<td> <?php echo $row['STATUS']; ?> </td>
								<td class="buttons_edit">
									<P id="accept_r"><a href="../edit_and_delete/all_order_process.php?accept=<?php echo $row['ORDER_NUMBER'];?>" >Accept</a></P>
									<p id="delete_r"><a href="../edit_and_delete/all_order_process.php?delete=<?php echo $row['ORDER_NUMBER'];?>">Delete</a></p>
								</td>
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