<?php

include 'db.php';


    global $db;
	$total=$_COOKIE['user'] ;
	$name=$_GET['name'];
	for($i=2;$i<=11;$i++){
		
		
		$x=$_GET[$i];
			$total.=' '.$x;
			
				
	}
	
	$query = "INSERT INTO groups (email,members) VALUES ('$name','$total')";
	$data = mysqli_query ($db,$query);
$res=mysqli_query($db,"SELECT ID FROM groups ORDER BY ID DESC");
$row=mysqli_fetch_array($res);
$id= $row['ID'];
$filename = 'file/'.$row['ID'].'.txt';
	$myf=fopen($filename,"w");


	header("location:user.php");
	

?>

