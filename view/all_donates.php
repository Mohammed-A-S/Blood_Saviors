<?php
session_start();
include '../inc/connection-inc.php';

$email = $_SESSION['email'];
$users_id = "SELECT ID FROM users WHERE EMAIL='$email'";
$id_query = mysqli_query($conn, $users_id);

$donors_all= "SELECT * FROM donors";
$donors_query = mysqli_query($conn, $donors_all);
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
					<h1>All Donors</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">All Donors</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">List Of All Donors</a>
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
						<h3>List Of All Donors</h3>
					</div>
                    <div class="volunteer-table">
					<table>
						<tr>
							<th> Order no. </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
                            <th> Amount </th>
							<th> Blood Disease</th>
							<th> Email </th>
							<th> status </th>
							<th> Actions </th>
						</tr>
						
						<?php while ($row = mysqli_fetch_array($donors_query)):?>
							<tr>
								<td> <?php echo $row['DONATE_NUMBER']; ?> </td>
								<td> <?php echo $row['USER_NAME']; ?> </td>
								<td> <?php echo $row['GENDER']; ?> </td>
								<td> <?php echo $row['BLOOD_TYPE']; ?> </td>
                                <td> <?php echo $row['AMOUNT']; ?> </td>
								<td> <?php echo $row['BLOOD_DISEASE']; ?> </td>
								<td> <?php echo $row['EMAIL']; ?> </td>
								<td> <?php echo $row['STATUS']; ?> </td>
								<td class="buttons_edit">
									<P id="accept_r"><a href="../edit_and_delete/all_donates_process.php?accept=<?php echo $row['DONATE_NUMBER'];?>" >Accept</a></P>
									<p id="delete_r"><a href="../edit_and_delete/all_donates_process.php?delete=<?php echo $row['DONATE_NUMBER'];?>">Delete</a></p>
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