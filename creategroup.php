



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
  xmlhttp.open("GET","userajax.php?q="+str,true);
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
					include 'db.php';
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
	<form action="addgroup.php" >
	<input style="width:50%;margin-left:30%;height:40px" placeholder="Gruop Name" type="text" name="name"  size="30">
<div id="livesearch"></div>

<input style="width:50%;margin-left:30%;height:40px" name="2" type="text" size="30"placeholder="Member 1" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="3" type="text" size="30"placeholder="Member 2" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="4" type="text" size="30"placeholder="Member 3" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="5" type="text" size="30"placeholder="Member 4" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="6" type="text" size="30"placeholder="Member 5" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="7" type="text" size="30"placeholder="Member 6" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="8" type="text" size="30"placeholder="Member 7" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="9" type="text" size="30"placeholder="Member 8" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="10" type="text" size="30"placeholder="Member 9" onkeyup="showResult(this.value)">
<input style="width:50%;margin-left:30%;height:40px" name="11" type="text" size="30"placeholder="Member 10" onkeyup="showResult(this.value)">
<br><br>
<input style="margin-left:50%"type="submit" value="create">
</form>
         
          
        </div>
		
    </section>
