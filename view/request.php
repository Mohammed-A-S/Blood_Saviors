<?php
session_start();
include '../inc/connection-inc.php';

$hsptl_id = $_SESSION['hsptl_id'];
$request_all = "SELECT * FROM requests WHERE H_ID='$hsptl_id'";
$request_query = mysqli_query($conn, $request_all);

$hospital_row = "SELECT * FROM hospital WHERE H_ID='$hsptl_id'";
$hospital_query = mysqli_query($conn, $hospital_row);

if(isset($_POST['new_req']))
{
    $row = mysqli_fetch_array($hospital_query);
	$h_id = $row['H_ID'];
	$h_name = $row['H_NAME'];
	$h_request = $_POST['h_request'];
    $r_status = $_POST['status_r'];

	$h_r_sql = "INSERT INTO requests (H_ID, H_NAME, REQUEST, STATUS)
                VALUES('$h_id', '$h_name', '$h_request', '$r_status')";
	$h_r_result = mysqli_query($conn, $h_r_sql);
    
	if($h_r_result)
	{
		header("location: request.php");
	}
	else
	{
		echo "there is problem, please check your infromatiom, or connect with us!";
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

	<title>Hospital</title>
</head>
<body>
	<!-- SIDEBAR -->
	<?php include "../sidebar_links/hsptl_links.php"; ?>
	<!-- SIDEBAR -->





	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include "../config/hsptl_nav_html.php"; ?>
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
							<a class="active" href="#">Your Hospital Requests</a>
						</li>
					</ul>
				</div>
			</div>

			<?php include "../config/counter_html.php"; ?>

			<form action="request.php" method="POST">
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Incerting New Request</h3>
							<button class="box_button_D_V" name="new_req"><p>+Request</p></button>
						</div>
						<table>
							<tr>
								<th> Hospital ID </th>
								<th> Hospital Name </th>
                                <th> Request </th>
                                <th style="display: none;"> Status </th>
							</tr>

                            <?php while($row2 = mysqli_fetch_array($hospital_query)): ?>
							<tr style=background-color:#fafafa;>
								<td><?php echo $row2['H_ID'] ?></td>
								<td><?php echo $row2['H_NAME'] ?></td>
								<td><input type="text" name="h_request" placeholder="Put the Request here" style="width: 300PX; height: 50PX;"></td>
								<td style="display: none;">
									<select name="status_r" required>
                                    <option value="wait">---</option>
                                    </select>
                                </td>
							</tr>
                            <?php endwhile; ?>
						</table>
					</div>
				</div>
			</form>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Your Hospital Requests</h3>
					</div>
					<table>
						<tr>
							<th> Request no. </th>
							<th> Hospital ID </th>
							<th> Hospital name </th>
                            <th> Request </th>
                            <th> Status </th>
						</tr>
						<?php while($row3 = mysqli_fetch_array($request_query)): ?>
							<tr>
								<td><?php echo $row3['REQUEST_N'] ?></td>
								<td><?php echo $row3['H_ID'] ?></td>
								<td><?php echo $row3['H_NAME'] ?></td>
                                <td><?php echo $row3['REQUEST'] ?></td>
                                <td><?php echo $row3['STATUS'] ?></td>
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