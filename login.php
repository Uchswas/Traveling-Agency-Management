<?php
ob_start();
include 'db.php';
	global $db;
if(!isset($_POST['Admin']))	{
	
if( !empty($_POST['email'])  && !empty($_POST['pass']) )   
{ 
$email = $_POST['email'];
	
	$password =  $_POST['pass'];
   $my="SELECT * FROM users WHERE email = '$_POST[email]' ";
	$query = mysqli_query ($db,$my);

	if($row = mysqli_fetch_array($query) )
	{
		$savepass=$row["pass"];
		if($password==$savepass){
setcookie('user',$email,time()+10000);
setcookie('admin','ad',time()+10000);

	header("Location: user.php");
		}
		else{
		echo "Wrong Password " ;
		}
	}
	else
	{
		echo "SORRY...This mail is not resgistered ...";
	}
}
else {
	echo "PLeasse fill all the field";
}

}
else{
	
	if( !empty($_POST['email'])  && !empty($_POST['pass']) )   
{ 
$email = $_POST['email'];
	
	$password =  $_POST['pass'];
   $my="SELECT * FROM admin WHERE email = '$_POST[email]' ";
	$query = mysqli_query ($db,$my);

	if($row = mysqli_fetch_array($query) )
	{
		$savepass=$row["pass"];
		if($password==$savepass){
setcookie('user',$email,time()+10000);
setcookie('admin','no',time()+10000);

	header("Location: adminlog.php");
		}
		else{
		echo "Wrong Password " ;
		}
	}
	else
	{
		echo "SORRY...This mail is not resgistered ...";
	}
}
else {
	echo "PLeasse fill all the field";
}
	
	
	
}

	

?>

