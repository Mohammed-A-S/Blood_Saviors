<?php
session_start();
include '../inc/connection-inc.php';

$_n = '';
$_g = '';
$_b_t = '';
$_b_d = '';
$_em = '';
$_pwd = '';

if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $show_user = "SELECT * FROM users WHERE ID = '$id'";
    $show_user_query = mysqli_query($conn, $show_user);

    if($show_user_query)
    {
        $row9 = mysqli_fetch_array($show_user_query);
        $_n = $row9['USER_NAME']; 
        $_g = $row9['GENDER'];
        $_b_t = $row9['BLOOD_TYPE']; 
        $_b_d = $row9['BLOOD_DISEASE'];
        $_em = $row9['EMAIL'];
        $_pwd = $row9['PASSWORD'];
    }
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $all="SELECT * FROM USERS WHERE ID='$id'";
    $query=mysqli_query($conn, $all);
    $row=mysqli_fetch_array($query);
    
    $mail = $row['EMAIL'];

    $delete1 = "DELETE FROM users WHERE ID = '$id'";
	$deleteing1 = mysqli_query($conn, $delete1);

    $delete2 = "DELETE FROM login WHERE EMAIL = '$mail'";
	$deleteing2 = mysqli_query($conn, $delete2);

    header("location: ../view/admin_users.php");
}

if(isset($_POST['update']))
{
    $u_n = $_POST['user_name_u'];
    $u_g = $_POST['gender_u'];
    $u_bt = $_POST['b_t_u'];
    $u_bd = $_POST['b_d_u'];
    $u_e = $_POST['email_u'];
    $u_p = $_POST['pwd_u'];

	$query1 = "UPDATE users SET USER_NAME='$u_n', GENDER='$u_g', BLOOD_TYPE='$u_bt', BLOOD_DISEASE='$u_bd', EMAIL='$u_e', PASSWORD='$u_p' WHERE EMAIL = '$u_e'";
	$register_result1 = mysqli_query($conn, $query1); //calling the connection ($conn) and Adding the content in ($sql)

    $sh = "SELECT * FROM users WHERE EMAIL = '$_em'";
    $SH1 = mysqli_query($conn, $sh);
    $row88 = mysqli_fetch_array($SH1);

	$query2 = "UPDATE login SET USER_NAME='$u_n', EMAIL='$u_e', PASSWORD='$u_p' WHERE EMAIL = '$u_e'";
	$register_result2 = mysqli_query($conn, $query2); //calling the connection ($conn) and Adding the content in ($sql)

    header("location: ../view/admin_users.php");
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
	<?php include "../sidebar_links/admin_process_pages.php"; ?>
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
					<form action="admin_users_process.php" method="POST">
						<div class="head">
							<h3>UPDATING USER INFORMATION</h3>
							<button class="box_button_D_V1" id="update_button" name="update"><p>UPDATE</p></button>
						</div>
						<div >
							<table>
								<tr>
									<th> Name </th>
									<th> Gender </th>
									<th> Blood Type </th>
									<th> Blood diseases </th>
									<th> PASSWORD</th>
								</tr>
								
								<tr style=background-color:#fafafa;>
									<td> <input type="text" name="user_name_u" value="<?php echo $_n; ?>" style="width: 200PX; height: 100%;" required></td>
									<td>
										<select name="gender_u"  required>
											<option value="<?php echo $_g; ?>"> <?php echo $_g; ?> </option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</td>
									<td>
										<select name="b_t_u" required>
											<option value="<?php echo $_b_t; ?>"> <?php echo $_b_t; ?> </option>
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
										<select name="b_d_u" required>
											<option value="<?php echo $_b_d; ?>"> <?php echo $_b_d; ?> </option>
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
									<td style="display: none;"> <input type="text" value="<?php echo $_em; ?>" name="email_u" style="width: 250PX; height: 100%;" required></td>
									<td> <input type="text" value="<?php echo $_pwd; ?>" name="pwd_u" style="width: 250PX; height: 100%;" required></td>
								</tr>
							</table>
						</div>
					</form>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="../script/script.js"></script>
</body>
</html>