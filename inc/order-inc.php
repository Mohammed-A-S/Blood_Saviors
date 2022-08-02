<?php
if (isset($_POST['new_order']))
{
	$row1 = mysqli_fetch_array($users_query);

	$_un = $row1['USER_NAME']; 
	$_gr = $row1['GENDER'];
	$_bt = $row1['BLOOD_TYPE'];
	$_amount = $_POST['amount'];
	$_hospital = $_POST['hospital'];
	$_eml = $row1['EMAIL'];
	$_status = $_POST['status'];

	$query = "INSERT INTO orders (USER_NAME, GENDER, BLOOD_TYPE, AMOUNT, HOSPITAL, EMAIL, STATUS) 
			VALUES ('$_un', '$_gr', '$_bt', $_amount, '$_hospital', '$_eml', '$_status')";
	
	$order_result = mysqli_query($conn, $query); //calling the connection ($conn) and Adding the content in ($query)
	
	if($order_result)
	{
		header ("location: order.php");
	}
	else
	{
		echo "there is problem, please check your infromatiom, or connect with us!";
	}
}