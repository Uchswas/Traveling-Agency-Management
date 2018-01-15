<?php
include 'db.php';
global $db;
 $st = $_GET['q'];
 $st = strtolower($st);
 
 $result = mysqli_query($db,"SELECT * FROM toulist ORDER BY id DESC");
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
		$s=$row['place'];
		$id=$row['id'];
		$name=$row['name'];
		 $s = strtolower($s);
		if (strpos($s,$st) !== false) {
     echo "<a style='color:green;text-align:center' href='result.php?id=$id'> " . $row['name'] . "</a><br><br>";
}
else{
	$s=strtolower($name);
			if (strpos($s,$st) !== false) {
     echo "<a style='color:green;text-align:center' href='result.php?id=$id'> " . $row['name'] . "</a><br><br>";
}

     }
	}
	}
	
?>