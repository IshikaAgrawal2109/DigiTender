<?php
include"dbconfig.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tender A Corporate category Flat bootstrap Responsive  Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Tender Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--top nav start here-->
<div class="mother-grid">
	<div class="container">
	  <div class="temp-padd">
		<div class="top-strip">
			<div class="address">
				<ul>
					<li><a href="https://projecttunnel.com/"><span class="link"> </span>www.projecttunnel.com</a></li>
					<li><a href="mailto:example@email.com"><span class="mes"> </span>projecttunnel52@gmail.com</a></li>
					<li><span class="ph"> </span>9993639672</li>
				</ul>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/projecttunnel/"> <span class="w-f"> </span></a></li>
                   <li><a href="https://twitter.com/PROJECTTUNNEL1"> <span class="w-tw"> </span></a></li>
                   <li><a href="https://www.linkedin.com/in/project-tunnel-75479a164/"> <span class="w-in"> </span></a></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
   </div>
<!--top nav end here-->	
<!--title start here-->
<div class="title-main">
			<a href="index.php"><h1>Tender</h1></a>
		
</div>
<!--title end here-->
<!--header start here-->
<div class="header">
			<div class="navg">
				<span class="menu" > </span>
			<?php include"nav.php";?>
					<script>
                  $( "span.menu").click(function() {
                    $(  "ul.res" ).slideToggle("slow", function() {
                     // Animation complete.
                     });
                     });
		       </script>
			</div>
			<div class="search">
				<input type="text" placeholder="Tender search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Site search';}"/>
				<input type="submit" value=""/>
			</div>
			<div class="clearfix"> </div>
  </div></br>
<!--header end here-->

<h2 style="text-align:center;background-color:#F35761;color:white;font-weight:bold">LOGIN</h2></br></br>
<div class="container">
<div class="row">
<div class="col-lg-4">
</div>
<div class="col-lg-4">
<div class="chart-area">
                  <form class="user"  method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                     <input type="submit"  value="Login" name="login" class="btn btn-primary btn-user btn-block">
               
                    <hr>
                    
                  </form>
				  
				  <?php
if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	
	$query="select * from registration where email='$email' and password='$password'";
	
	
	
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		//print_r($data);
		}
		
		$_SESSION['name']=$name;
		$_SESSION['id']=$id;
		$_SESSION['login']="yes";
	//print_r($_SESSION);	
		 echo'<script>alert("login success");
window.location="tender.php"		 </script>';
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	
			  
			  
			  ?>
                  </div>

</div>
<div class="col-lg-4">
</div>
</div>
</div>
<div class="card-body">
                  
                </div>









<!-- Slideshow 4 -->
			   
	<div class="clearfix"> </div>
<!--molli end here-->
<!--information-grid start here-->
 
</div>
<!--information grid end here-->
<!--footer start here-->
 <div class="footer">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 footer-grid">
					<a href="https://www.facebook.com/projecttunnel/"><img src="images/ftr-fa.png" alt=""/></a>
				</div>
				<div class="col-md-4 footer-grid">
					<a href="https://twitter.com/PROJECTTUNNEL1"><img src="images/tw.png" alt=""/></a>
					
				</div>
				<div class="col-md-4 footer-grid">
					<a href="http://projecttunnel.com/"><img src="images/drib.png" alt=""/></a>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>Developed By  <a href="http://projecttunnel.com/">Projecttunnel </a></p>
			</div>
		</div>
	   </div>
	</div>
  </div>
<!--footer end here-->
</body>
</html>

