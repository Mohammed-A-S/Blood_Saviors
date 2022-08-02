<?php
session_start();
include '../inc/connection-inc.php';

$users_all= "SELECT * FROM users";
$users_query = mysqli_query($conn, $users_all);

if(isset($_POST['save']))
{
	$user_name = $_POST['user_name'];
	$gender = $_POST['gender'];
	$b_t = $_POST['b_t'];
	$b_d = $_POST['b_d'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];

	$query1 = "INSERT INTO users (USER_NAME, GENDER, BLOOD_TYPE, BLOOD_DISEASE, EMAIL, PASSWORD)
				VALUES ('$user_name', '$gender', '$b_t', '$b_d', '$email', '$pwd')";
	$register_result1 = mysqli_query($conn, $query1); //calling the connection ($conn) and Adding the content in ($sql)

	$query2 = "INSERT INTO login (USER_NAME, EMAIL, PASSWORD, ACCESS)
				VALUES ('$user_name', '$email', '$pwd', 'user')";
	$register_result2 = mysqli_query($conn, $query2); //calling the connection ($conn) and Adding the content in ($sql)

	header ("location: emp_users.php");
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

	<title>Users</title>
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
					<h1>Users</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Users</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">All Users</a>
						</li>
					</ul>
				</div>
			</div>

			<?php include "../config/counter_html.php"; ?>

			<div class="table-data">
				<div class="order">
					<form action="emp_users.php" method="POST">
						<div class="head">
							<h3>INSERTING NEW USER</h3>
							<button class="box_button_D_V" id="insert_button" name="save"><p>Save</p></button>
						</div>
						<div>
							<table>
								<tr>
									<th> Name </th>
									<th> Gender </th>
									<th> Blood Type </th>
									<th> Blood diseases </th>
									<th> Email </th>
									<th> PASSWORD</th>
								</tr>
								
								<tr style=background-color:#fafafa;>
									<td> <input type="text" name="user_name" style="width: 200PX; height: 100%;" required></td>
									<td>
										<select name="gender"  required>
											<option value=""> --- </option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</td>
									<td>
										<select name="b_t" required>
											<option value=""> --- </option>
											<option value="A+">A+</option>
											<option value="B+">B+</option>
											<option value="O+">O+</option>
											<option value="AB+">AB+</option>
											<option value="A-">A-</option>
											<option value="B-">B-</option>
											<option value="O-">O-</option>
											<option value="AB-">AB-</option>
										</select>
									</td>
									<td>
										<select name="b_d" required>
											<option value=""> --- </option>
											<option value="no disease">No Blood Disease</option>
											<option value="Anemia">Anemia</option>
											<option value="Hemophilia">Hemophilia</option>
											<option value="Leukocytosis">Leukocytosis</option>
											<option value="Polycythemia vera">Polycythemia vera</option>
											<option value="Sickle cell disease">Sickle cell disease</option>
											<option value="Thalassemia">Thalassemia</option>
											<option value="Von Willebrand disease">Von Willebrand disease</option>
										</select>
									</td>
									<td> <input type="email" name="email" style="width: 250PX; height: 100%;" required></td>
									<td> <input type="password" name="password" style="width: 250PX; height: 100%;" required></td>
								</tr>
							</table>
						</div>
					</form>
				</div>
			</div>
			
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>ALL USERS</h3>
					</div>
					<div class="volunteer-table">
					<table>
						<tr>
							<th> ID </th>
							<th> Name </th>
							<th> Gender </th>
							<th> Blood Type</th>
							<th> Blood diseases </th>
							<th> Email </th>
							<th> OPTIONS </th>
						</tr>
						<?php while ($row = mysqli_fetch_array($users_query)): ?>
							<tr>
							<td> <?php echo $row['ID']; ?></td>
							<td> <?php echo $row['USER_NAME']; ?></td>
							<td> <?php echo $row['GENDER']; ?></td>
							<td> <?php echo $row['BLOOD_TYPE']; ?></td>
							<td> <?php echo $row['BLOOD_DISEASE']; ?></td>
							<td> <?php echo $row['EMAIL']; ?></td>
							<td class="buttons_edit">
								<P style="position:relative; left: 25px;" id="accept_r"><a href="../edit_and_delete/emp_users_process.php?edit=<?php echo $row['ID'];?>" >Edit</a></P>
								<p style="position:relative; left: 25px;" id="delete_r"><a href="../edit_and_delete/emp_users_process.php?delete=<?php echo $row['ID'];?>">Delete</a></p>
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