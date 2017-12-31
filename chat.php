
<?php
   if(isset($_POST['submit'])) {
      require 'function.php'; 
	 $username=$_POST['username'];
	$password=$_POST['password'];
	if($username!=''&&$password!='')
	{
	   $result = mysqli_query($con,'select * from members where username="'.$username.'" and password="'.$password.'"');
      if (mysqli_num_rows($result) == 1){
		  session_start();
	$_SESSION['username'] = $username;
	 echo '<script type="text/javascript">
				location.replace("comments.php");
			  </script>';
 }
  else
  {
	  $errMSG = "Username or Password is invalid";
	 }
}else
  {
$errMSG = "Enter both username and password";
  }
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />
<link href="nav.css" rel="stylesheet" type="text/css"  /></head>

<body>
<div id="container">

<div id="header">
<img border="0" img align="left" src="image/ecwa_logo.jpg" width="130" height="119"/>
<table bgcolor="#FFFFFF" align="center" width="670" height="119">
<tr>
<td>
<h2>ECWA GOODNEWS KUMO,
<br/>GOMBE STATE.</h2>
</td>
</tr>
</table>
</div>

<div id="nav">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="about.html">ABOUT</a>
<ul>
      <li><a href="history.html">History</a></li>
      <li><a href="mission.html">Mission</a></li>
      <li><a href="vision.html">Vision</a></li>
	   <li><a href="contact.html">Contact</a></li>
    </ul>
</li>
<li><a href="news.html">NEWS</a></li>
<li><a href="galery.html">GALERY</a></li>
<li><a href="chat.php">FORUM</a></li>
<li><a href="http://www.gmail.com">MAIL</a></li>
</ul>
</div>

<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">
<br/>
<table border="2" height="400"  align="center"width="700" >
<tr>
<td></td>
</tr>
</table>
<br/>
</div>


<div id="sidebar">
<table bgcolor="#CCCC99" border="0" bordercolor="#FFffff" width="10" height="158" cellpadding="3" align="left">
</table>
<table bgcolor="#006699" border="2" bordercolor="#FFCC33" width="245" height="30" cellpadding="3" align="center">
<tr>
<td> <center><font color="#CCCC99">USER LOGIN</font></center></td>
</tr>
</table> 
<br/>
<br/>
<form method="POST" action="#">
      <table width="200" border="2" align="center">
        <tr>
          <td><font color="#006699">Username</font></td>
          <td><input name="username" type="text"></td>
        </tr>
        <tr>
          <td><font color="#006699">Password</font></td>
          <td><input name="password" type="password" ></td>
        </tr>
		 <tr>
		<tr>
          <td colspan="2"><span class="errors">
          </span></td>
          </tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit"  value="Login">	
		  </td>
        </tr>	
		</table>
		</form>
		 <?php
   if ( isset($errMSG) ) {
    
    ?>
    <span style="color:red; text-align:center; margin:auto"><?php echo $errMSG; ?> </span>
    <?php
   }
   ?>
		
</div>

<div id="footer">
<marquee direction="Lleft">WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>

