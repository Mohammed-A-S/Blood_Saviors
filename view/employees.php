<?php
session_start();
include '../inc/connection-inc.php';

$employee_all = "SELECT * FROM employee";
$employee_query = mysqli_query($conn, $employee_all);

if(isset($_POST['new_emp']))
{
	$emp_name = $_POST['emp_name'];
	$emp_email = $_POST['emp_email'];
	$emp_password = $_POST['emp_pwd'];

	$emp_sql1 = "INSERT INTO employee (USER_NAME, EMAIL, PASSWORD)
		VALUES('$emp_name', '$emp_email', '$emp_password')";
	$emp_result1 = mysqli_query($conn, $emp_sql1);

	$emp_sql2 = "INSERT INTO login (USER_NAME, EMAIL, PASSWORD, ACCESS)
		VALUES('$emp_name', '$emp_email', '$emp_password', 'emp')";
	$emp_result2 = mysqli_query($conn, $emp_sql2);

	if($emp_result1)
	{
		header("location: employees.php");
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
					<h1>Employees</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Employees</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">All Employees</a>
						</li>
					</ul>
				</div>
			</div>

			<?php include "../config/counter_html.php"; ?>

			<form action="employees.php" method="POST">
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>INSERTING New Employee</h3>
							<button class="box_button_D_V" name="new_emp" style="width: 150px;"><p>+Employee</p></button>
						</div>
						<table>
							<tr>
								<th> Employee Name </th>
								<th> Email </th>
                                <th> Password </th>
							</tr>

							<tr style=background-color:#fafafa;>
								<td><input type="text" name="emp_name"  placeholder="New Employee Name" style="width: 200X; height: 100%;" required></td>
								<td><input type="text" name="emp_email"  placeholder="example@host.com" style="width: 200PX; height: 100%;" required></td>
								<td><input type="password" name="emp_pwd" placeholder="************" style="width: 200PX; height: 100%;" required></td>
							</tr>
						</table>
					</div>
				</div>
			</form>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Employees</h3>
					</div>
					<table>
						<tr>
							<th> ID </th>
							<th> Name </th>
							<th> Email </th>
                            <th> Password </th>
							<th> Edit</th>
						</tr>

						<?php while($row2 = mysqli_fetch_array($employee_query)): ?>
							<tr>
								<td><?php echo $row2['ID'] ?></td>
								<td><?php echo $row2['USER_NAME'] ?></td>
								<td><?php echo $row2['EMAIL'] ?></td>
                                <td><?php echo $row2['PASSWORD'] ?></td>
								<td class="buttons_edit">
									<P style="position:relative; left: 120px;" id="accept_r"><a href="../edit_and_delete/employees_process.php?edit=<?php echo $row2['ID'];?>" >Edit</a></P>
									<p style="position:relative; left: 120px;" id="delete_r"><a href="../edit_and_delete/employees_process.php?delete=<?php echo $row2['ID'];?>">Delete</a></p>>
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