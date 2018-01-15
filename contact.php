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
    <![endif]--></head>
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
    

    <section style="margin-left:35%"  id="services-sec">
 <?php 
 if(!empty($_COOKIE['user'])){
	 				 echo '<a href="writemessage.php"><button style="background-color:#32CD32;color:white;border:none;border-radius:20px;height:30px;width:150px;margin-left:12%;border:none" type = "submit">	Message To admin</button></a>';
	if($_COOKIE['admin']!='ad')
	 				 echo '<br><br><a href="mlist.php"><button style="background-color:#32CD32;color:white;border:none;border-radius:20px;height:30px;width:150px;margin-left:12%;border:none" type = "submit">Reply User Message</button></a>';
	 				 else
					 echo '<br><br><a href="mymessage.php"><button style="background-color:#32CD32;color:white;border:none;border-radius:20px;height:30px;width:150px;margin-left:12%;border:none" type = "submit">Your Message </button></a>';

		}

 
 ?>
       <h2 style="color:green"> Khulna Travel Agency Limited </h2>      
<b style="margin-left:10%;color:orange"> Office : SonaDanga Abashik Elaka <b>	<br>
<b style="margin-left:10%"> House No : 29  <b><br>
<b style="margin-left:10%"> Block No : B west <b><br>
<b style="margin-left:10%"> Road No : 3 <b>	<br>
<b style="margin-left:10%"> Sonadanga,Khulna  <b> <br> <br>

<b style="margin-left:10%;color:blue"> Phone No : +8801711112634  <b><br>
<b style="margin-left:10%;color:blue"> Telephone : +0274643  <b><br><br>
 <b style="margin-left:10%;color:red"> Email :khulnatravel@gmail.com  <b> <br><br>  <br><br><br><br><br><br><br><br><br><br><br>
    </section>
    <!--END HOME SECTION-->
    

   

    <!--FOOTER SECTION -->
    <div id="footer">
   	
		


				       
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
