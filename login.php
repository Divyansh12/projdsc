<?php
session_start();
$conn=mysqli_connect('localhost','root','','dsc');
if(isset($_REQUEST["login"]))
{
  $User =$_REQUEST["Uname"];
  $Pass= $_REQUEST["Upass"];
  $query="Select username,password from regist where username='$User' And password='$Pass' ";
  $r=mysqli_query($conn,$query);
  $b=mysqli_fetch_row($r);
  if($b[0]!=null)
  {
    $_SESSION['s']=$b[0];
    $_SESSION['expire']=time()+(5*60);
    $_SESSION["U"]=$User;
    header('location:inbox.php');
  }
  else
  {
     echo "Invalid usename/password";
  }
}

?>
<!DOCTYPE html>


<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation</title>

  <!-- Included CSS Files -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <!--[if lt IE 9]>
    <link rel="stylesheet" href="stylesheets/ie.css">
  <![endif]-->

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

	<div class="row">
		<div class="twelve columns">
		<img height="100" width="100" src="images/DSC logo.jpg" align="left"/>
		<p align="center"><h2>DSC-BVP</h2></p>
    <h5>A new way to Learn</h5>
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">
			<ul  class="nav-bar">
 		 		<li class="active"><a href="index.php">Home</a></li>
  				<li><a href="about.php">About Us</a></li>
  				<li><a href="login.php">Login</a></li>
          <li><a href="regist.php">Register</a>
          </li>
          <li><a href="#">Gallery</a> </li>
  				<li><a href="#">Contact Us</a></li>
          </li>
			</ul>

		</div>
	</div>

	<!-- don't mind this script, I just added them for fun! -->
	<script charset="ISO-8859-1" src="http://fast.wistia.com/static/popover-v1.js"></script>

	<div class="row">
		<div class="twelve columns">
			<div class="row">
				<div class="eight columns">
          <form method="post" style="align:center">
          <div class="log1">
          <h1>LOGIN</h1>

          Username::<input type="text" name="Uname"/>
          <br>
          <br>
          Password::<input type="password" name="Upass"/>
          <br>
          <br>
          <input type="submit" name="login" value="Login"/>
          <br>
          <br>
          <a href="regist.php"><input type="button"value="Sign UP"></a>
          <br>
          <br>
          <a href="forget.php">Forgot your password?</a>
          </div>
          </form>

				</div>

				<div class="four columns">
					<h4>News</h4>
          <marquee direction="up"onmouseover="this.stop()"onmouseleave="this.start()">
            <ul>
              <li><h4>GDG-BVP changed to DSC-BVP</h4></li>
              <li><h4>Actions on Google Workshop held on Jul-2,6,9-2018</h4> </li>
            </ul>

          </marquee>

					<!-- don't mind these, I just added them for fun! -->


				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
		<hr />
		<p align="center">©2018 DSC-BVP. Design by Divyansh Agarwal.</p>
		</div>
	</div>
</body>
