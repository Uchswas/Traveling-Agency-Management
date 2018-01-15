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
        <div class="container" style="margin-left:40%">
                           <a href="realadd.php"> <h4><button style="background-color:#4284C6;color:white;border:none;border-radius:20px;height:40px;width:200px;border:none" type = "submit">Add Tour</button> </a>

		
			   
						   
						   
						   
                  </div>
               
    </section>
    <!--END HOME SECTION-->
	<br>
 <h2 style="margin-left:45%">Tour list</h2>
    

   

    <!--FOOTER SECTION -->
    <div id="footer">
   	
		
		<br>
<table style=" margin-left:20%;width:100%">

       <th  ><b>Tour Title</b></th>
	 
	  <th><b>Duration</b></th>
	   <th><b>Start Date</b></th>
	 
	  
  </table>

 
<?php 
echo "<table>";
$result = mysqli_query($db,"SELECT * FROM toulist ORDER BY id DESC");
$count=1;
 while($row = mysqli_fetch_array($result))
     {
		 if($count%2==1){
			echo "<tr style='width:100%;height:40px;background-color:#CCFFFF'>";
		 }
		 else{
				echo "<tr style='width:100%;height:40px;background-color:#DEFFDE'>";
		 };
		 $id=$row['id'];
	

		  echo "<td ><a href='delete.php?id=$id'> Delete</a></td>";
		  
	

      

	  echo "<td  style='text-align:center;width:40%'><a href='result.php?id=$id'> " . $row['name'] . "</a></td>";
	  echo "<td style='text-align:center;width:30%'>" . $row['time'] . "</td>";
	  echo "<td style='text-align:center;width:30%'>" . $row['date'] . "</td>";
         $count++;
echo "</tr>";
	 }   
  echo "</table>"   ;  



?>

				       
         
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
