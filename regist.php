<?php
$conn=mysqli_connect('localhost','root','','dsc');
$r=1;
if(isset($_REQUEST["usubmit"]))
{
$User=$_REQUEST["Uname"];
$Pass=$_REQUEST["Upass"];
$email=$_REQUEST["uemail"];
$phone=$_REQUEST["uphone"];
$ques=$_REQUEST["Qselect"];
$ans=$_REQUEST["Qans"];
$gend=$_REQUEST["gender"];
$date=$_REQUEST["cal"];
$hobby=implode(' , ',$_REQUEST['hobby']);
$query="insert into regist values('$User','$Pass','$email','$ques','$ans','$date','$hobby','$gend',$phone)";

//INSERt into regist VALUES('abs','asvnads','di@gamil.com','any','ans','2018-08-07','any','male',9898989898);

$r=mysqli_query($conn,$query);

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
          <h1>REGISTER To DSC</h1>
          <marquee direction="right"onmouseover="this.stop()"onmouseleave="this.start()">
          <h3>Enter Your Details</h3>
          </marquee>
          <form class="cr"  method="post">
           Username ::<input type="text" name="Uname"required>
           <br>
           <br>
           Password :: <input type="password" name="Upass" required>
           <br>
           <br>
           Re-Password :: <input type="password" name="Urpass" required>
           <br>
           <br>
           Email :: <input type="email" name="uemail" required>
           <br>
           <br>
           Phone No. :: <input type="number" name="uphone" minlength="10" maxlength="10" required>
           <br>
           <br>
           Security Question::
           <select name="Qselect" required>
             <option>What is your pet name</option>
             <option>What is your first car name</option>
             <option>What is your favourite place</option>
             <option>Who is your favourite soccer player</option>
             <option>What is your Favourite Sports</option>
             <option>Where were you born</option>
           </select>
           <br>
           <br>
          Answer :: <input type="text" name="Qans" value="" required>
          <br>
          <br>
          Gender ::
             <input type="radio" name="gender" value="Male"> Male </input>
            <input type="radio" name="gender" value="Female"> Female </input>
          <br>
          <br>
          <span>
          Hobby ::
          </span>
          <input type="checkbox" name="hobby[]" value="Swimming">Swimming</input>
          <input type="checkbox" name="hobby[]" value="Paragliding">Paragliding</input>
          <input type="checkbox" name="hobby[]" value="Music">Music</input>
          <input type="checkbox" name="hobby[]" value="Reading">Reading</input>
          <br>
          <br>
          Date Of Birth <input type="date" name="cal" value="">
          <br>
          <br>

           <input type="submit" name="usubmit" value="Submit">
           <marquee direction="right"onmouseover="this.stop()"onmouseleave="this.start()">
           <h3>
             <?php
             if(isset($_REQUEST["usubmit"]))
             {
               if($r>0)
           {
             echo "Registeration Done";
           }
           else {
             echo "Sorry!! Registration can't take place now";
           }
         } ?></h3>
           </marquee>
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
