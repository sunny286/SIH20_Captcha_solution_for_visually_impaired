

    <?php
	session_start();
	?>
<html>

<head>

<title>SIH

</title>

<link rel="icon" href="logo1.png" type="image/icon type">
<link rel="stylesheet" type="text/css" href="login.css">

</head>

<body background="books.gif" style="background-repeat: no-repeat;
  background-size: 1500px 1000px; opacity: 10 " >
  


<center>
<h1>Indian Institute Of Information Technology, Bhagalpur</h1><br>
<h1>CAPTCHA/Alternate solution for visually impaired</h1><br>
	

<a href="index.php">

<img src="iiitbh.png" alt="Indian Institute Of Information Technology, Bhagalpur" height="130" width="130">

</img>
<img src="logo.png" alt="Indian Institute Of Information Technology, Bhagalpur" height="110" width="130">

</img>

</img>
<img src="drdoo.png" alt="Indian Institute Of Information Technology, Bhagalpur" height="110" width="130">

</img>

</a>

<form action="login.php" method = "post">

<div class="container">


<input type="text" placeholder="Enter Username" name="username" required>
 
</div>
<div>
<input type="password" placeholder="Enter Password" name="password" required>
</div>
<div>
<style>/* Top left text */
.click {
  position: absolute;
  top: 370px;
  left: 600px;
}
</style>
<img src="oooo.jpg" alt="Workplace" usemap="#workmap" width="200" height="179">
<h4>Click on "Hello" to Submit</h4>
<map name="workmap">
  <area shape="rect" coords="5,40,35,50" alt="Computer" href="rrr.php">
</map>


<audio controls   accesskey="h">
  <?php	
		$capt = array("30", "10", "8" , "13" , "11" );
		$num=$capt[rand(0,4)];
		$_SESSION['capp']=$num;
  
  echo'	<source src="'.$num.'.mp3" type="audio/mpeg" >
Your browser does not support the audio element.
</audio></div>
<input type="text" placeholder = "Enter Captcha" name="fname"><br>
<div>
   
<input name="submit" type="submit" value=" Login "><br>
<a href="/pass/forgot_password.php">forgot passowrd</a><br>
<a href="/pass/signup.php">New User?? Sign Up</a>

</div>




</form>

</center>

</body>

</html>';
?>
