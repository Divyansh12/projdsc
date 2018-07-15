<?php
session_start();
$conn=mysqli_connect('localhost','root','','dsc');
if(isset($_REQUEST["Usubmit"]))
{
  $User =$_REQUEST["Uname"];
  $query="Select username,password from regist where username='$User'";
  $r=mysqli_query($conn,$query);
  $b=mysqli_fetch_row($r);
  if($b[0]!=null)
  {
    $_SESSION['s']=$b[0];
    $_SESSION['expire']=time()+(5*60);
    $_SESSION["U"]=$User;
    header('location:forget2.php');
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
  <hr>
	<!-- don't mind this script, I just added them for fun! -->
	<script charset="ISO-8859-1" src="http://fast.wistia.com/static/popover-v1.js"></script>

	<div class="row">
		<div class="twelve columns">
			<div class="row">
				<div class="eight columns">
          <form method="post" style="align:center">
          <h1>Change Password</h1>

          <span>Enter Username :: </span><input type="text" name="Uname">
          <input type="submit" name="Usubmit">
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
</html>
