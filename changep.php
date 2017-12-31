<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />
<link href="nav.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript">
    $(function () {
        $("#Submit").click(function () {
            var password = $("#password").val();
            var confirmpassword = $("#confirmpassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
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
<li><a href="ecwa.html">HOME</a></li>
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
<li><a href="visitors.html">VISITORS</a></li>
<li><a href="chat.php">FORUM</a></li>
<li><a href="http://www.gmail.com">MAIL</a></li>
</ul>
</div>
<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">
<br/>
<br/>
<table width="500" border="0" align="center">
<tr>
	 
  <td width="111" rowspan="2" valign="center"><img src="image/lock1.jpg" width="141" height="181"></td>
     <td width="858" height="57"><h1 align="center"><font color="CCCC99">New User Signup</font></h1></td>
   </tr>
  <tr>
     <td><form name="form1" method="post" action="#" onSubmit="return check();">
       <table width="301" border="0" align="right">
         <tr>
           <td><div align="left" class="style7">Old Username </div></td>
           <td><input type="text" name="username" value=""></td>
         </tr>
         <tr>
           <td class="style7">Old Password</td>
           <td><input type="password" name="password" value=""></td>
         </tr>
         <tr>
           <td class="style7">New Username </td>
           <td><input name="Username" type="text" value=""></td>
         </tr>
         <tr>
           <td class="style7">New Password</td>
           <td><input name="password" type="password" id="name" value=""></td>
         </tr>
         <tr>
           <td>Confirm Password</td>
           <td><input name="cpassword" type="password" id="comfirmpassword" value=""></td>
         </tr>
        
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Change"></td>
         </tr>
       </table>
     </form></td>
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
