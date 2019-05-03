<?php

extract($_POST);

require_once "login.php";
$connection=new mysqli($db_hostname,$db_username,$db_password,"TRAVEL_TRAILS");

$query="INSERT INTO REVIEW
VALUES('','$username','$location','$country','$datevisited','$review',
		'$hygiene','$hospitality','$pricing','$food','$file-upload')";	
$connection->query($query);

if($connection->error)
{
	 die("Review was not uploaded. ".$connection->error);
}

header('Location: http://localhost/Travel_Trails/home.php');
mysqli_close($connection);
?>