<?php
require_once'header.php';
 if( !isset($_SESSION['username']) ) {
   echo '<script type="text/javascript">
				location.replace("chat.php");
			  </script>';
  exit;
 }
 if(isset($_POST['btn'])){
 $comment=$_POST['comment'];
 $user=$_SESSION['username'];
  $res=mysqli_query($con,'INSERT INTO comment(comment,username,date,time) VALUES("'.$comment.'","'.$user.'", CURDATE(),CURTIME())');
  } 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />
<link href="rotate.css" rel="stylesheet" type="text/css"  />
<link href="nav.css" rel="stylesheet" type="text/css"  />
<style>
#main1{
width:65%;
height:450px;
float:left;
color: #CCCC99;
background-color: #006699;
font-weight:bold;
margin-left: auto;
}
#sidebar {
	width:33%;
	height:450;
	background-color: #CCCC99;
	float: right;
}
#footer{
	font-family: Arial, Helvetica, sans-serif;
	width:100%;
	height:40px;
	background-color: #CCCCCC;
	color:#006699;
	font-weight:bold;
	clear:both;
}
#header {
	color:#006699;
	font-weight: bold;
	background-color: #FFFFFF;
	height:20%;
	width: 100%;
	text-align:center; 
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size:18px;
}
#empty{
width: 80%;
height: 10px;
background-color:white;
clear:both;
margin:auto;
}
#com{
width: 80%;
height: 50px;
background-color:white;
margin:auto;
clear:both;
margin-top:3px;
}
#dis{
width: 80%;
height: 330px;
background-color:white;
margin:auto;
overflow-y: scroll;
font-size:12px;
}

input[type="text"]
{
	width:30%;
	height:20px;
	border:1px solid silver;
	border-radius:5px;
	font-size:14px;
	font-family:helvetica;
	color:blue;
	margin-top:5px;
}
input[type="submit"]
{
	width:10%;
	height:25px;
	background-color:gray;
	color:black;
	border-radius:5px;
	font-size:17px;
	margin-left: 3px;
	margin-top:5px;
}
</style>
<script>
function comment(){
var ajaxRequest; // The variable that makes Ajax possible!
try{
ajaxRequest = new XMLHttpRequest();
}catch (e){
try{
ajaxRequest = new ActiveXObject("Msxm l2.XMLHTTP");
}catch (e) {
try{
ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
}catch (e){
alert("Your browser broke!");
return false;
        }
    }
}
ajaxRequest.onreadystatechange = function(){
if(ajaxRequest.readyState == 4){
    if(ajaxRequest.status == 200){
			if(ajaxRequest.responseText){
				document.getElementById("dis").innerHTML = ajaxRequest.responseText;
                                }
		}
		else{
			
		}
	}
}

ajaxRequest.open("GET", "comment.php", true);
ajaxRequest.send(null);
}
setInterval('comment()',1000);
</script>
</head>

<body>
<div id="container">

<div id="header">
<img border="0" img align="left" src="image/ecwa_logo.jpg" width="130" height="119"/>
<table bgcolor="#FFFFFF" align="center" width="670" height="119">
<tr>
<td>
<h2 style="text-align:center; font-size:24px; color:#006699">ECWA GOODNEWS KUMO,
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

<div id="main1">
  <p style="text-align:center">Make Your Post Here <?php echo $_SESSION['username']; ?></p>
  <div id="empty"></div>
 <div id= "dis"> </div>
 <div id = "com">
  <form action="" method="post">
  <center>
  <input type="text" name ="comment" placeholder = "what's on your mind..."/> &nbsp;
  <input type="submit" value="POST" name="btn"/>
  </center>
  </form>
</div>
</div>


<div id="sidebar">
<table align="center">
<tr><td><img border="0" img align="left" src="image/s10.jpg" width="240" height="420" /></td></tr>
</table>
<i>@2017-EBM</i>
</div>

<div id="footer">
<marquee direction="Lleft">WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>

