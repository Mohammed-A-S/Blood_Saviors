<?php
session_start();
include '../inc/connection-inc.php';

$hospital_all = "SELECT * FROM hospital";
$hospital_query = mysqli_query($conn, $hospital_all);

if(isset($_POST['new_hsptl']))
{
	$h_name = $_POST['h_name'];
	$a_p = $_POST['A_P'];
	$b_p = $_POST['B_P'];
	$o_p = $_POST['O_P'];
	$ab_p = $_POST['AB_P'];
	$a_n = $_POST['A_N'];
	$b_n = $_POST['B_N'];
	$o_n = $_POST['O_N'];
	$ab_n = $_POST['AB_N'];

	$h_sql = "INSERT INTO hospital (H_NAME, A_P, B_P, O_P, AB_P, A_N, B_N, O_N, AB_N)
		VALUES('$h_name', '$a_p', '$b_p', '$o_p', '$ab_p', '$a_n', '$b_n', '$o_n', '$ab_n')";

	$hsptl_result = mysqli_query($conn, $h_sql);

	if($h_sql)
	{
		header("location: hospitals.php");
	}
	else
	{
		echo "there is problem, please check your information, or connect with us!";
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
	<?php include "../sidebar_links/admin_links.php"; ?>
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
					<h1>Hospitals</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Hospitals</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">All hospitals</a>
						</li>
					</ul>
				</div>
			</div>

			<?php include "../config/counter_html.php"; ?>

			<form action="hospitals.php" method="POST">
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Incerting New hospital</h3>
							<button class="box_button_D_V" name="new_hsptl"><p>+Hospital</p></button>
						</div>
						<table>
							<tr>
								<th> Hospital Name </th>
								<th> A+ </th>
								<th> B+</th>
								<th> O+ </th>
								<th> AB+ </th>
								<th> A- </th>
								<th> B-</th>
								<th> O- </th>
								<th> AB- </th>
							</tr>

							<tr style=background-color:#fafafa;>
								<td><input type="text" name="h_name" placeholder="NEW HOSPITAL NAME" style="width: 250PX; height: 100%;"></td>
								<td><input type="text" name="A_P"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="B_P"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="O_P"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="AB_P" placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="A_N"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="B_N"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="O_N"  placeholder="00" style="width: 50PX; height: 100%;"></td>
								<td><input type="text" name="AB_N" placeholder="00" style="width: 50PX; height: 100%;"></td>
							</tr>
						</table>
					</div>
				</div>
			</form>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Hospitals</h3>
					</div>
					<table>
						<tr>
							<th> Hospital ID </th>
							<th> Hospital Name </th>
							<th> A+ </th>
							<th> B+</th>
							<th> O+ </th>
							<th> AB+ </th>
							<th> A- </th>
							<th> B-</th>
							<th> O- </th>
							<th> AB- </th>
						</tr>

						<?php while($row2 = mysqli_fetch_array($hospital_query)): ?>
							<tr>
								<td><?php echo $row2['H_ID'] ?></td>
								<td><?php echo $row2['H_NAME'] ?></td>
								<td><?php echo $row2['A_P'] ?></td>
								<td><?php echo $row2['B_P'] ?></td>
								<td><?php echo $row2['O_P'] ?></td>
								<td><?php echo $row2['AB_P'] ?></td>
								<td><?php echo $row2['A_N'] ?></td>
								<td><?php echo $row2['B_N'] ?></td>
								<td><?php echo $row2['O_N'] ?></td>
								<td><?php echo $row2['AB_N'] ?></td>
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