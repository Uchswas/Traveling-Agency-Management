<?php
ob_start();
include 'db.php';
global $db;


  $id=$_GET['id'];
 

	$sql = "DELETE from admin where id='$id'" ;
$res=mysqli_query($db,$sql);

header('Location:adminlist.php');


?>