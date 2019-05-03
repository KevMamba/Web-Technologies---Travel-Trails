<?php


extract($_POST);

require_once "login.php";
$connection=new mysqli($db_hostname,$db_username,$db_password,"TRAVEL_TRAILS");


$query="INSERT INTO USER
VALUES('$email','$psw')";	
$connection->query($query);

if($connection->error)
{
	 die("Account not created. ".$connection->error);
}

header('Location: http://localhost/Travel_Trails/home.php');

?>