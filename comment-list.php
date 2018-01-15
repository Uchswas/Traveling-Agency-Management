<?php
require_once ("db2.php");

$sql = "SELECT * FROM tbl_comment  ORDER BY parent_comment_id, comment_id desc";

$result = mysqli_query($conn, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
	$name=$row['comment_sender_name'];
	$name=(int)$name;
	$val=$_COOKIE['grp'];
	if($name==$val   )
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($conn);
echo json_encode($record_set);
?>