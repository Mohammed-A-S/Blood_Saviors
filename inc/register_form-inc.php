<?php
$errors = 
[
	'username' => '',
	'gender' => '',
	'blood_type' => '',
	'blood_dis' => '',
	'email' => '',
	'pwd' => '',
];

if (isset($_POST['submit']))
{
	$_username = $_POST['username'];
	$_gender = $_POST['gender'];
	$_blood_type = $_POST['blood_type'];
	$_blood_dis = $_POST['blood_dis'];
	$_email = $_POST['email'];
	$_pwd = $_POST['pwd'];

	if(empty($_username))
	{
		$errors['username'] = 'Please Enter User Name!';
	}
	elseif(empty($_gender))
	{
		$errors['gender'] = 'Please Enter Gender!';
	}
	elseif(empty($_blood_type))
	{
		$errors['blood_type'] = 'Please Enter Blood Type!';
	}
	elseif(empty($_blood_dis))
	{
		$errors['blood_dis'] = 'Please Enter Blood Disease!';
	}
	elseif(empty($_email))
	{
		$errors['email'] = 'Please Enter Email!';
	}
	elseif(!filter_var($_email, FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = 'Please Enter Email correctly!';
	}
	elseif(empty($_pwd))
	{
		$errors['pwd'] = 'Please Enter Your Password!';
	}
	else
	{
		$query1 = "INSERT INTO users (USER_NAME, GENDER, BLOOD_TYPE, BLOOD_DISEASE, EMAIL, PASSWORD) 
			VALUES ('$_username', '$_gender', '$_blood_type', '$_blood_dis', '$_email', '$_pwd')";
		$register_result1 = mysqli_query($conn, $query1); //calling the connection ($conn) and Adding the content in ($sql)

		$query2 = "INSERT INTO login (USER_NAME, EMAIL, PASSWORD, ACCESS)
			VALUES ('$_username', '$_email', '$_pwd', 'user')";
		$register_result2 = mysqli_query($conn, $query2); //calling the connection ($conn) and Adding the content in ($sql)

		header ("location: ../index.php");
	}
}
