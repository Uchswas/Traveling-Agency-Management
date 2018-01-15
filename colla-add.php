<?php

$comment = isset($_GET['comment']) ? $_GET['comment'] : "";
$grp=$_COOKIE['grp'];
$name='file/'.$grp.'.txt';
$myfile = fopen($name, "w") ;
fwrite($myfile, $comment);
header( "Location:colla.php?id=".$grp );

?>
