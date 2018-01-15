 <form action=" writemessage.php " method="get">
  Write Message : <br>
  <textarea type="textarea" name="message">   </textarea><br>
  <input type="submit" value="Send Message" >
  
 
</form> 
<?php
include 'db.php';
global $db;

if(!empty($_GET['message'])){
	$m=$_GET['message'];
	$email=$_COOKIE['user'];
	$date = date('Y-m-d H:i:s');
	 $query = "INSERT INTO message (email,Message,time) VALUES ('$email','$m','$date')";
	$data = mysqli_query ($db,$query);
	header('Location:mymessage.php');
	
	
	
	
}


?>