<?php
include '../inc/connection-inc.php';

if(isset($_GET['accept']))
{
	$id = $_GET['accept'];

	$accept = "UPDATE requests SET STATUS = 'ACCEPTED' WHERE REQUEST_N = '$id'";
	$query = mysqli_query($conn, $accept);

	header("location: ../view/all_requests.php");
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $delete = "DELETE FROM requests WHERE REQUEST_N = '$id'";
	$delete = mysqli_query($conn, $delete);
    
    header("location: ../view/all_requests.php");
}