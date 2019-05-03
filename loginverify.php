<?php
extract($_POST);
session_start();

require_once "login.php";
$connection=new mysqli($db_hostname,$db_username,$db_password,"TRAVEL_TRAILS");

$result1 = mysqli_query($connection,"SELECT USEREMAIL FROM USER WHERE PASSWORD = '".$psw."'");
$result2 = mysqli_query($connection,"SELECT PASSWORD FROM USER WHERE USEREMAIL = '".$uname."'");

$result1 = $result1->fetch_assoc();
$result1= $result1['USEREMAIL'];

$result2 = $result2->fetch_assoc();
$result2 = $result2['PASSWORD'];

if($uname == $result1 && $psw == $result2) 
{ 
    $_SESSION["logged_in"] = true; 
    $_SESSION["name"] = $uname;
    header('Location: http://localhost/Travel_Trails/entryform.php');
}
else
{
	header('Location: http://localhost/Travel_Trails/home.php');
} 
mysqli_close($connection);
?>