<?PHP
$db_Server_name = "localhost";
$db_User_name = "root";
$db_Password = "";
$db_Name = "online_blood_donation";

$conn = mysqli_connect($db_Server_name, $db_User_name, $db_Password, $db_Name);

if(!$conn)
{
    echo 'Error: ' . mysqli_connect_error();
}