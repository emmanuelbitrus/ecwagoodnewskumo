<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />
<link href="nav.css" rel="stylesheet" type="text/css"  />
<script language="javascript">
function check()
{
  if(document.form1.username.value=="")
  {
    alert("Plese Enter Your Username");
	document.form1.username.focus();
	return false;
  } 
  if(document.form1.password.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.password.focus();
	return false;
  } 
   if(document.form1.cpassword.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpassword.focus();
	return false;
  }
  if(document.form1.password.value!=document.form1.cpassword.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpassword.focus();
	return false;
  }
 
  return true;
  }
  
</script>
</head>

<body>
<div id="container">
<div id="header">

<img border="0" img align="left" src="image/ecwa_logo.jpg" width="130" height="121" />
<table bgcolor="#FFFFFF" align="center" width="500" height="100">
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
<li><a href="index.php">BACK</a></li>
</ul>
</div>
<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">
<br/>
<br/>
<table width="510" border="0" align="center"> 
<tr>
	 
  <td width="141" rowspan="2" valign="center"><img src="image/lock.jpg" width="141" height="180"></td>
     <td width="508" height="57"><h1 align="center"><font color="CCCC99">Change Admin Password</font></h1></td>
   </tr>
  <tr>
     <td><form name="form1" method="post" action="#" onSubmit="return check();">
       <table width="301" border="0" align="right">
         <tr>
           <td class="style7">New Username </td>
           <td><input name="username" type="text" value=""></td>
         </tr>
         <tr>
           <td class="style7">New Password</td>
           <td><input name="password" type="password" id="password" value=""></td>
         </tr>
         <tr>
           <td>Confirm Password</td>
           <td><input name="cpassword" type="password" id="cpassword" value=""></td>
         </tr>
        
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Change"></td>
         </tr>
		 <tr>
		  <td>	   <?php
	  include("database.php");

	   $username = $_POST['username'];
		$password = $_POST['password'];

 $query = "UPDATE admin_login SET password = '$password' WHERE username = '$username'";
if(mysql_query($query))
{
echo "updated";
}
else
{
echo "fail";
}
?></td>
		 </tr>
    	</table>

     </form>
	 </td>
   </tr>
 </table>
 <p>&nbsp; </p>
</div>
<div id="sidebar">
</div>
<div id="footer"><marquee direction="Lleft">
WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>
