<?php
ob_start();
include 'db.php';
global $db;


  $id=$_GET['id'];
 

	$sql = "DELETE from toulist where id='$id'" ;
$res=mysqli_query($db,$sql);

header('Location:addtour.php');


?>