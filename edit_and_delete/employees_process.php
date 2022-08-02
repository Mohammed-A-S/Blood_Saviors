<?php
session_start();
include '../inc/connection-inc.php';

$employee_all = "SELECT * FROM employee";
$employee_query = mysqli_query($conn, $employee_all);

$_n = '';
$_em = '';
$_pwd = '';

if(isset($_GET['edit']))
{
    $id = $_GET['edit'];

    $show_emp = "SELECT * FROM employee WHERE ID = '$id'";
    $show_emp_query = mysqli_query($conn, $show_emp);

    if($show_emp_query)
    {
        $row9 = mysqli_fetch_array($show_emp_query);
        $_n = $row9['USER_NAME'];
        $_em = $row9['EMAIL'];
        $_pwd = $row9['PASSWORD'];
    }
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $all="SELECT * FROM employee WHERE ID='$id'";
    $query=mysqli_query($conn, $all);
    $row=mysqli_fetch_array($query);
    
    $mail = $row['EMAIL'];

    $delete1 = "DELETE FROM employee WHERE ID = '$id'";
	$deleteing1 = mysqli_query($conn, $delete1);

    $delete2 = "DELETE FROM login WHERE EMAIL = '$mail'";
	$deleteing2 = mysqli_query($conn, $delete2);

    header("location: ../view/employees.php");
}

if(isset($_POST['update_emp']))
{
    $e_n = $_POST['emp_name'];
    $e_e = $_POST['emp_email'];
    $e_p = $_POST['emp_pwd'];

	if(!empty($e_n) && !empty($e_e) && !empty($e_p))
	{
		$query1 = "UPDATE employee SET USER_NAME='$e_n', EMAIL='$e_e', PASSWORD='$e_p' WHERE EMAIL = '$e_e'";
		$register_result1 = mysqli_query($conn, $query1); 

		$query2 = "UPDATE login SET USER_NAME='$e_n', EMAIL='$e_e', PASSWORD='$e_p' WHERE EMAIL = '$e_e'";
		$register_result2 = mysqli_query($conn, $query2);
		
		header("location: ../view/employees.php");
	}
	else
	{
		header("location: ../view/employees.php");
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
	<?php include "../sidebar_links/admin_employees_process_links.php"; ?>
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

			<form action="employees_process.php" method="POST">
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>INSERTING New Employee</h3>
							<button class="box_button_D_V1" name="update_emp" style="width: 150px;"><p>Update</p></button>
						</div>
						<table>
							<tr>
                                <th> ID </th>
								<th> Employee Name </th>
                                <th> Password </th>
							</tr>

							<tr style=background-color:#fafafa;>
                            <td><?php echo $_GET['edit']; ?></td>
								<td><input type="text" name="emp_name" value="<?php echo $_n; ?>" style="width: 200X; height: 100%;" required></td>
								<td style="display: none;"><input type="text" value="<?php echo $_em; ?>"   name="emp_email" style="width: 200PX; height: 100%;" required></td>
								<td><input type="text" value="<?php echo $_pwd; ?>" name="emp_pwd" style="width: 200PX; height: 100%;" required></td>
							</tr>
						</table>
					</div>
				</div>
			</form>
		</main>
		<!-- MAIN -->

		
	</section>
	<!-- CONTENT -->

	
	<script src="../script/script.js"></script>
</body>
</html>