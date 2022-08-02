<?php
include '../inc/connection-inc.php';

if(isset($_GET['accept']))
{
	$id = $_GET['accept'];
	$accept = "UPDATE orders SET STATUS = 'ACCEPTED' WHERE ORDER_NUMBER = '$id'";
	$query = mysqli_query($conn, $accept);

	if($query)
	{
		header("location: ../view/all_orders.php");
	}
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $delete = "DELETE FROM orders WHERE ORDER_NUMBER = '$id'";
	$delete = mysqli_query($conn, $delete);
    if($delete)
    {
        header("location: ../view/all_orders.php");
    }
}