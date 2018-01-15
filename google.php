

<?php
include 'db.php';
$grp=$_COOKIE['grp'];
$name='file/'.$grp.'.txt';
$date=
$myfile = fopen($name, "r") or die("Unable to open file!");
    global $db;
$date = date('Y-m-d H:i:s');
$email=$_COOKIE['user'];
$var=fread($myfile,filesize($name));
	$query = "INSERT INTO searchlist (email,str,tm,grp) VALUES ('$email','$var','$date','$grp')";
	$data = mysqli_query ($db,$query);

header( "Location:https://cse.google.com/cse/publicurl?cx=010705415423036287689:zrgsdmhtw4i&q=".$var );



?>