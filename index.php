<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />

</head>

<body>
<div id="container">
<div id="header">

<img border="0" img align="left" src="image/ecwa_logo.jpg" width="130" height="119" />
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
<li><a href="ecwa.html">HOME</a></li>
</ul>
</div>
<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">
<hr/>

<hr/>

<form method="POST" action="#">
<table width="490" border="0">
<tr>
<caption><h2>Adminstrative Login</h2></caption> 

</tr>
  <tr>
      <td width="132"><img src="image/lock.jpg" width="140" height="155" align="center"></td>
      <td width="238"><table width="265" border="0" align="center" >
  <tr>
      <td width="163" class="style2">Login ID </td>
      <td width="149"><input name="username" type="text"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input name="password" type="password" ></td>
  </tr>
	<tr>
       <td colspan="2"></td>
    </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
	<tr>
       <td colspan="2">
	   &nbsp
	   <?php
		include("database.php");
if(isset($_POST['submit']))
{

 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysql_query("select * from admin_login where username='".$username."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
  echo '<script type="text/javascript">
				location.replace("login.php");
			  </script>';
   }
   else
   {
    echo'Username or Password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
	   </td>
	   
    </tr>
	<tr>
	<td colspan="2"><center><font color="CCCC99"><a href=changeuser.php> Change Username & Password</a></font></center></td>
	</tr>
</table>
</td>

</tr>  
</table>
</form>
<br/>
<hr/>
<hr/>

</div>
<div id="sidebar">
</div>
<div id="footer"><marquee direction="Lleft">
WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
