<?php

include 'db.php';
SignUp();


function newuser()
{    global $db;
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$birthday= $_POST['birth'];
	$password =  $_POST['pass'];
	echo $fname ;
	$query = "INSERT INTO users (fname,lname,email,sex,birthday,pass) VALUES ('$fname','$lname','$email','$sex','$birthday','$password')";
	$data = mysqli_query ($db,$query);
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}

}
function SignUp()
{
	global $db;
if(!empty($_POST['email']) &&!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['pass']) && !empty($_POST['birth']) && !empty($_POST['sex']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{    $my="SELECT * FROM users WHERE email = '$_POST[email]' ";
	$query = mysqli_query ($db,$my);
     if (!$query) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
	if(!$row = mysqli_fetch_array($query) )
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
else {
	echo "PLeasse fill all the field";
}
}


	

?>

