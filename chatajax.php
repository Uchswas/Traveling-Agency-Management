<?php
include 'db.php';
global $db;
 $st = $_GET['q'];
 $st = strtolower($st);
 
$filename = 'file/'.$st.'.txt';
$fh = fopen($filename,'r');
while ($line = fgets($fh)) {

 echo($line);
 echo "<br>";
}
fclose($fh);
?>
