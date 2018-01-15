<?php

   include 'db.php';
	global $db;
    
    //Create connection and select DB
  $id2=$_GET['id2'];
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from 
	$id=$_GET['id'];
    $result = $db->query("SELECT * FROM toulist where id=$id");
 
    if($result->num_rows > 0){
         while($row = $result->fetch_assoc() ){
            $image=$row['image'];
			$name=$row['name'];
			$duration=$row['time'];
			$place=$row['place'];
			$start=$row['date'];
			$id=$row['id'];
		 $daytoday=$row['daytoday'];
		 $route=$row['route'];
			
			
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
                    <li><a href="Contact.html">BOOKING</a></li>
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
	
	
	
	
	
	
	echo'<li><a href="user.php">'.strtoupper($uname).'</a></li>';
}
else{
	echo" <li><a href='signup.php'>SIGN UP</a></li>";
}
?>
					<li><a href="Contact.html">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->

    <section  id="services-sec">
        <div class="container">
		    <?php
           echo '<img style="width:60%;height:200px;margin-left:20%", src="data:image/jpeg;base64,'.base64_encode($image) .'" /> <h4 style="text-align:center;display:margin-left:2%;color:#088CE5;margin-top:1%">'.$name.'</h4> </a>';
		 ?>
		 
		 <div style="margin-left:48%" class="fb-share-button" data-href="https://www.google.com/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
        </div>
		<br>
		<?php
echo '<a href="realgrpbook.php?id='.$id.'&id2='.$id2.'"><button style="background-color:#32CD32;color:white;border:none;border-radius:20px;height:30px;width:150px;margin-left:45%;border:none" type = "submit">Book This Tour</button></a>';
		 echo '<p style="margin-left:2%;text-align:center;color:red;margin-top:10px"><b>Days '.$duration.'</b></p>';
		    echo '<p style="margin-left:1%;text-align:center;color:red"><b>Starting  '.$start.'</b></p>';
			echo '<h4 style="margin-left:20%;color:#2F4F4F"> Visiting places </h4>';
		  echo '<p style="text-align:center;margin-left:10%"><b>  '.$place.'</b></p>';
			
			echo '<h4 style="margin-left:20%;color:#2F4F4F"> Day to Day </h4>';
		  echo '<p style="text-align:center;margin-left:10%"><b>  '.$daytoday.'</b></p>';
		  
		  echo '<h4 style="margin-left:20%;color:#2F4F4F"> Route </h4>';
		  echo '<p style="text-align:center;margin-left:10%"><b>  '.$route.'</b></p>';
          ?>
		  
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>




