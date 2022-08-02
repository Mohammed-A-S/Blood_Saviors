<?php
//-----------------user submit-----------------
if (isset($_POST['submit_user']))
{
	$_SESSION['email'] = $_POST['user_email'];
	$user_pwd = $_POST['user_pwd'];
	
	$user_email = $_SESSION['email'];
	
	$user_login_query = "SELECT * FROM login WHERE EMAIL='$user_email' AND PASSWORD='$user_pwd'";
	$user_login_result = mysqli_query($conn, $user_login_query);
    $rows1 = mysqli_num_rows($user_login_result);
	
	$access = mysqli_fetch_array($user_login_result);
	
	if($rows1 === 1)
	{
		if($access['ACCESS'] == 'admin')
		{
			header ("location: view/admin_users.php");
		}
		elseif($access['ACCESS'] == 'emp')
		{
			header ("location: view/emp_users.php");
		}
		elseif($access['ACCESS'] == 'user')
		{
			header ("location: view/Blood_Bank.php");
		}
	}
    else
    {
        echo 'INVALID EMAIL OR PASSWORD!';
    }
}


if (isset($_POST['submit_hsptl']))
{
	$_SESSION['hsptl_id'] = $_POST['hsptl_id'];
	$hsptl_pwd = $_POST['hsptl_pwd'];

	$hsptl_id = $_SESSION['hsptl_id'];
	
	$hsptl_login_query = "SELECT * FROM hospital WHERE H_ID='$hsptl_id' AND H_PWD='$hsptl_pwd'";
	$hsptl_login_result = mysqli_query($conn, $hsptl_login_query);

    $rows4 = mysqli_num_rows($hsptl_login_result);

	if($rows4 === 1)
	{
		header ("location: view/request.php");
	}
    else
    {
        echo 'ID OR PASSWORD!';
    }
}