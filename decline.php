<?php
ob_start();
include 'db.php';
global $db;


  $id=$_GET['id'];
 

	$sql = "UPDATE booking
SET status='Declined' 
WHERE ID='$id' " ;
$res=mysqli_query($db,$sql);

header('Location:clientrequest.php');


?>