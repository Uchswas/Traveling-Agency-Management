<?php
ob_start();
include 'db.php';
global $db;
 $id=$_GET['id'];
 echo"<h3> Message: <br> </h3>";
	$sql = "SELECT *  from message 
WHERE id='$id' " ;
$res=mysqli_query($db,$sql);
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['Message'].'<br><br>';
}
?>


 <form action=" replymessage.php " method="get">
 <h3> Reply : <br></h3>
  <textarea type="textarea" name="message">   </textarea><br>
  <input type="hidden" value= "<?php echo $id; ?>" name="id" > 
  <input type="submit" value="Reply Message" >
  
 
</form>


<?php



 
 
if(!empty($_GET['message'])){
	$reply=$_GET['message'];
	$sql = "UPDATE message
SET Reply='$reply' 
WHERE id='$id' " ;
$res=mysqli_query($db,$sql);

header('Location:mlist.php');
}
?>