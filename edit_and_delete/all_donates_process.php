<?php
include '../inc/connection-inc.php';

if(isset($_GET['accept']))
{
	$id = $_GET['accept'];

	$accept = "UPDATE donors SET STATUS = 'ACCEPTED' WHERE DONATE_NUMBER = '$id'";
	$query = mysqli_query($conn, $accept);

    header("location: ../view/all_donates.php");

}


if (isset($_GET['delete']))
{
    $sql = "SELECT * FROM USERS";
    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($query);
    $mail = $row['EMAIL'];

    $id = $_GET['delete'];

    $delete = "DELETE FROM donors WHERE DONATE_NUMBER = '$id'";
	$delete = mysqli_query($conn, $delete);

    $delete = "DELETE FROM login WHERE EMAIL = '$mail'";
	$delete = mysqli_query($conn, $delete);

    header("location: ../view/all_donates.php");
}