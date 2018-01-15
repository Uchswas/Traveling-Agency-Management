<?php

   include 'db.php';
	global $db;
    
    //Create connection and select DB
   
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
   
	$email=$_COOKIE['user'];
	$name=$_POST['name'];
	$start=$_POST['strt'];
	$duration=$_POST['time'];
	$n=$_POST['mem'];
	$place=$_POST['place'];
    
	
	$query = "INSERT INTO booking (email,tourname,strt,duration,catagory,member,places) VALUES ('$email','$name','$start','$duration','Own Choice','$n','$place')";
	$data = mysqli_query ($db,$query);
    
	header('Location:user.php');

?>

