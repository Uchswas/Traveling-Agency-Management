<?php
include 'db.php';
global $db;
 $st = $_GET['w'];
 $st = strtolower($st);
 $message=$_GET['q'];
 
$filename = 'file/'.$st.'.txt';
$fp = fopen($filename, 'w');
fwrite($fp, 'Cats chase mice');
fclose($fp)
fclose($fh);
?>