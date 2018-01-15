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

    <section  id="services-sec">
	    <a href="logout.php"><button style="background-color:green;color:white;border:none;border-radius:20px;height:30px;width:150px;margin-left:45%;border:none" type = "submit">Logout</button></a>
        <br> <br>
        <div class="container" style="margin-left:300px">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                    <div class="col-md-4 col-sm-4 alert-info">
                         <a href="addtour.php"> <h4>Add  or Delete Tour Plan </h4>   </a>     
                            <p>
                               You can add Tour <br>
							   Delete Planned Tour <br>
							   Remove Date over Tour <br>
							   Manage Tour <br>
                            </p>
                            
                    </div>
                    <div class="col-md-4 col-sm-4 alert-success">
                         <a href='clientrequest.php' style='color:green'>   <h4>See Client Request </h4> </a>
                            <p>
                              Many Client Request<br>
							  Tourist Planned or Agency Planned Tour <br>
                               Accept that Request<br>
                              Also Can be declined							   
                            </p>
                            
                    </div>
					
                    <div class="col-md-4 col-sm-4 alert-success" style="margin-left:1px">
                             <a href='addadmin.php' style='color:green'>   <h4>Add Admin </h4> </a>
                            <p>
                               Many Tour Guides  all around <br>
							   Helps to maintain Tour<br>
							   Have lots of information<br>
							   Make them Admin
                            </p>
                            
                    </div>
					
                   
                    <div class="col-md-4 col-sm-4 alert-danger">
                   <a href='adminlist.php' style='color:#a94442'>   <h4>Delete Admin </h4> </a>
                            <p>
                              No relation with one Admin<br>
							  Have no need to stay them<br>
							  Jussst Delete Them<br>
							  Keep our website safer
                            </p>
							
                          
                    </div>
					 
                  </div>
               
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
