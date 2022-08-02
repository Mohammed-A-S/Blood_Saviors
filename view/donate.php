<?php
session_start();
include '../inc/connection-inc.php';

//user
$email = $_SESSION['email'];
$users_all = "SELECT * FROM users WHERE EMAIL='$email'";
$users_query = mysqli_query($conn, $users_all);

$all_donors = "SELECT * FROM donors WHERE EMAIL='$email'";
$donors_query = mysqli_query($conn, $all_donors);

if (isset($_POST['new_donate']))
{
	$row9 = mysqli_fetch_array($users_query);

	$_un = $row9['USER_NAME'];
	$_gr = $row9['GENDER'];
	$_bt = $row9['BLOOD_TYPE'];
	$_amount = $_POST['amount_d'];
	$_blood_dis = $row9['BLOOD_DISEASE'];
	$_eml = $row9['EMAIL'];
	$_status = $_POST['status_d'];

	
	$donors_query = "INSERT INTO donors (USER_NAME, GENDER, BLOOD_TYPE, AMOUNT, BLOOD_DISEASE, EMAIL, STATUS)
					VALUES ('$_un', '$_gr', '$_bt', '$_amount', '$_blood_dis', '$_eml', '$_status')";
	$donate_result = mysqli_query($conn, $donors_query);

	$blood_b_query = "INSERT INTO blood_bank (DONOR_NAME, BLOOD_TYPE, AMOUNT) VALUES ('$_un', '$_bt', '$_amount')";
	$blood_b_result = mysqli_query($conn, $blood_b_query);

	if($donate_result)
	{
		header ("location: donate.php");
	}
	else
	{
		mysqli_error($conn,$donate_result);
	}
}
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

	<title>Donate</title>
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
					<h1>Donate</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Donate</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Your Donate List</a>
						</li>
					</ul>
				</div>
			</div>

		<?php include "../config/counter_html.php"; ?>

		<!-- first box -->
		<div class="table-data">
			<div class="order">
				<form action="donate.php" method="POST">
					<div class="head"> <h3>New Donate</h3> <button class="box_button_D_V1" id="show1">NEW</button>
					</div>
					<div class="hide_new_order" id="adding1"><!--NEW div for jQuery-->
						<div class="head">
							<h3>Add New Donate</h3>
							<button class="box_button_D_V" name="new_donate"><p>+Donate</p></button>
						</div>
						<table>
							<tr>
								<th> ID </th>
								<th> Name </th>
								<th> Gender </th>
								<th> Blood Type</th>
								<th> Amount</th>
								<th> Blood Diseases </th>
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
										<select name="amount_d" required>
											<option value="">---</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</td>
									<td> <?php echo $row2['BLOOD_DISEASE']; ?></td>
									<td> <?php echo $row2['EMAIL']; ?></td>
									<td style="display: none;">
										<select name="status_d" required>
											<option value="wait">---</option>
										</select>
									</td>
								</tr>
							<?php endwhile; ?>
						</table>
					</form>
				</div>
			</div>
		</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Your Donate List</h3>
					</div>
					<table>
						<tr>
							<th> Donate no. </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
							<th> Amount</th>
							<th> Blood Diseases </th>
							<th> Email </th>
							<th> status </th>
						</tr>
						
						<?php while ($row3 = mysqli_fetch_array($donors_query)): ?>
							<tr>
								<td> <?php echo $row3['DONATE_NUMBER']; ?> </td>
								<td> <?php echo $row3['USER_NAME']; ?> </td>
								<td> <?php echo $row3['GENDER']; ?> </td>
								<td> <?php echo $row3['BLOOD_TYPE']; ?> </td>
								<td> <?php echo $row3['AMOUNT']; ?> </td>
								<td> <?php echo $row3['BLOOD_DISEASE']; ?> </td>
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

	
	<script src="../script/script.js"></script>
	<script src="../script/jQscript.js"></script>
</body>
</html>