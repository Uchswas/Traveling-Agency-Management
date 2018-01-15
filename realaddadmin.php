<?php

   include 'db.php';
	global $db;
    
    //Create connection and select DB
   
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
	$email=$_POST['2'];
    //Get image data from database
    $result = $db->query("SELECT * FROM users where email='$email'");
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
			$pass=$row['pass'];
			
			
    }
    $result->close();
	
	$query = "INSERT INTO admin (email,pass) VALUES ('$email','$pass')";
	$data = mysqli_query ($db,$query);
		header('Location:adminlist.php');
    }
	else
		echo "Not a user .. Mussst be a User first to be Admin"

?>

