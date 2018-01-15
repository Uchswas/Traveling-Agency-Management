<?php
$grp=$_COOKIE['grp'];
$name='file/'.$grp.'.txt';
$myfile = fopen($name, "r") or die("Unable to open file!");
if(filesize($name) > 0)
echo fread($myfile,filesize($name));


?>