<?php
include 'db.php';
global $db;
 $st = $_GET['q'];
 $st = strtolower($st);
 
 $result = mysqli_query($db,"SELECT * FROM users ORDER BY userID DESC");
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
		$s=$row['email'];
		 $s = strtolower($s);
		if (strpos($s,$st) !== false) {
     echo "" . $row['email'] . "<br><br>";
}


     
	}
	}
	
?>