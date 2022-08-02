<?php
session_start();
include '../inc/connection-inc.php';

$all_request = "SELECT * FROM requests";
$all_request_query = mysqli_query($conn, $all_request);
$order_count = mysqli_num_rows($all_request_query);

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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<title>All REQUESTS</title>
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
					<h1>Requests</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Requests</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">All Requests</a>
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
						<h3>All Requests</h3>
					</div>
					<table>
						<tr>
							<th> Request no. </th>
							<th> Hospital ID </th>
							<th> Hospital name </th>
                            <th> Request </th>
                            <th> Status </th>
							<th> Actions</th>
						</tr>
						
						<?php while($row3 = mysqli_fetch_array($all_request_query)): ?>
							<tr>
								<td><?php echo $row3['REQUEST_N'] ?></td>
								<td><?php echo $row3['H_ID'] ?></td>
								<td><?php echo $row3['H_NAME'] ?></td>
                                <td><?php echo $row3['REQUEST'] ?></td>
								<td><?php echo $row3['STATUS'] ?></td>
                                <td class="buttons_edit">
									<P id="accept_r"><a href="../edit_and_delete/all_requests_process.php?accept=<?php echo $row3['REQUEST_N'];?>" >Accept</a></P>
									<p id="delete_r"><a href="../edit_and_delete/all_requests_process.php?delete=<?php echo $row3['REQUEST_N'];?>">Delete</a></p>
								</td>
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
</body>
</html>