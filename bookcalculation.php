<?php

   include 'db.php';
	global $db;
    
    //Create connection and select DB
   
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    $id=$_GET['id'];
	$n=$_GET['number'];
	$email=$_COOKIE['user'];
    //Get image data from database
    $result = $db->query("SELECT * FROM toulist where id='$id'");
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
			$name=$row['name'];
			$duration=$row['time'];
			$place=$row['place'];
			$start=$row['date'];
			$id=$row['id'];
			
			
    }
    $result->close();
	
	$query = "INSERT INTO booking (email,tourname,strt,duration,catagory,member,places) VALUES ('$email','$name','$start','$duration','Agency','$n','$place')";
	$data = mysqli_query ($db,$query);
    }
	header('Location:user.php');

?>

