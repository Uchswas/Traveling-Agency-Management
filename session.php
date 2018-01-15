
<?php

// Set session variables
$value = $_GET['id'];
setcookie("grp", $value, time()+3600); 

$x=$value;
header('Location:index.php?id='.$x.'');

?>