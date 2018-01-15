
<?php

// Set session variables
$value = $_GET['id'];
setcookie("grp", $value, time()+3600); 

$x=$value;
$grp=$_COOKIE['grp'];
$name='file/'.$grp.'.txt';
$myfile = fopen($name, "w") ;
fwrite($myfile,"");
header('Location:colla.php?id='.$x.'');

?>