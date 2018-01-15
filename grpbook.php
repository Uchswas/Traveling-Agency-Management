<?php

   include 'db.php';
	global $db;
    
    //Create connection and select DB
   
     $id2=$_GET['id'];
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT * FROM toulist");
    $image=array();
	$name=array();
	$duration=array();
	$place=array();
	$start=array();
	$id=array();
	$i=0;
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
            $image[$i]=$row['image'];
			$name[$i]=$row['name'];
			$duration[$i]=$row['time'];
			$place[$i]=$row['place'];
			$start[$i]=$row['date'];
			$id[$i]=$row['id'];
			
			$i++;
    }
    $result->close();
    }else{
        echo 'Image not found...';
    }

?>



<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Multipager Template- Travelic </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	
	<script>

  
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","ajax.php?q="+str,true);
  xmlhttp.send();
}
</script>

</script>
	</head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img src=".\assets\img\logo.jpg" alt="logo" height="40" width="200" align="top" > </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="home.php"  >HOME</a></li>
                    <li><a href="Package.php">PACKAGE</a></li>
                    <li><a href="booking.php">BOOKING</a></li>
					<?php
					session_start();
if(isset($_COOKIE['user'])){
	$user=$_COOKIE['user'];
	$result = $db->query("select * from users where email='$user' " );
	if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
            $uname=$row['fname'];
    }
	
	}
	
	if($_COOKIE['admin']=='ad')
	echo'<li><a href="user.php">'.strtoupper($uname).'</a></li>';
	else
	echo'<li><a href="adminlog.php">'.strtoupper($uname).'</a></li>';
}
else{
	echo" <li><a href='signup.php'>SIGN UP</a></li>";
}
?>
					
					<li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
	
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
	
    <section  id="services-sec">
        <div class="container">
	<form>
<input style="width:50%;margin-left:30%;height:40px" type="text" size="30"placeholder="Search Your Interested Places" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
          <?php 
		  
		  
		  
		  for($j=$i-1;$j>=0;$j--){
			  $k=$id[$j];
		  echo '<img style="width:400px;height:150px;margin-left:10%;margin-top:40px", src="data:image/jpeg;base64,'.base64_encode($image[$j]) .'" /> <a href="result2.php?id='.$k.'&id2='.$id2.'"> <h4 style="display:inline;margin-left:2%;color:#2F4F4F;margin-top:10%">'.$name[$j].'</h4> </a>';
		  echo '<p style="margin-left:2%;display:inline;text-align:center;color:red"><b>Days '.$duration[$j].'</b></p>';
		    echo '<p style="margin-left:1%;display:inline;text-align:center;"><b>Starting  '.$start[$j].'</b></p>';
		  echo '<p style="margin-left:10%;color:#2F4F4F"><b>  '.$place[$j].'</b></p>';
		  }
		  
		  ?>
          
        </div>
		
    </section>
