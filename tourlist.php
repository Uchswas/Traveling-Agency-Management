<?php

include 'db.php';
	global $db;
if(isset($_POST["submit"])){
	
	
	$tourname= $_POST['tourname'];
	$route= $_POST['route'];
	$time= $_POST['time'];
	$daytoday = $_POST['daytoday'];
	$place= $_POST['place'];
	$date=$_POST['start'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insert image content into database
        $insert = $db->query("INSERT into toulist (image,name,place,time,daytoday,route,date) VALUES ('$imgContent','$tourname','$place','$time','$daytoday','$route','$date')");
        if($insert){
            header("location:addtour.php");
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}



	

?>

