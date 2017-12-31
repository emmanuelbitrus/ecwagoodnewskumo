<?php
require_once'header.php';
 if( !isset($_SESSION['username']) ) {
   echo '<script type="text/javascript">
				location.replace("chat.php");
			  </script>';
  exit;
 }
 if(isset($_POST['sen'])) {
	if(isset($_SESSION['username']) ) {
 $comment =  $_POST['comm'];
   $user = $_SESSION['username'];
  $res = mysqli_query($con,'INSERT INTO comment(comment,username,date,time) VALUES("'.$comment.'","'.$user.'", CURDATE(),CURTIME())');
}
  } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#d{
	width:70%;
	border-radius:10px;
	margin-top:4px;
	margin:auto;
	}
	td{
		color:#003;
		font-size:12px;
		padding:1px 1px 1px 1px;
		height:15px'
		}
#form_before_lunch{
	width:60%;
	padding-top:5px;
	border-radius:5px;
}
#form_before_lunch > input[type="button"] {
	color:white;
	font-family:sans-serif;
	text-align:center;
	font-size:12px;
	background-color:black;
	margin-right:70%;
	border-radius:5px;
	cursor :pointer;
}
#form{
	display:none;
	width:200px;
	height:50px;
	border:1px solid white;
	margin:0px auto;
}
#form > #disp {
	width:190px;
	height:5px;
	border-radius:5px;
	margin:auto;
}
#form > #inp{
	width:190px;
	height:5px;
	margin:auto;
}
#form > #inp > input[type="text"]
{
	width:50%;
	height:15px;
	border:1px solid silver;
	font-size:12px;
	size:10px;
}
#form > #inp > input[type="submit"]
{
	width:30%;
	height:20px;
	background-color:gray;
	color:black;
	border-radius:5px;
	font-size:12px;
	margin-left: 3px;
</style>
</head>

<body>
<div id="d">
<?php
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("goodnews");

$result = mysql_query("SELECT comment,username, date,time FROM comment ORDER BY id DESC");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo'<table align="center" width="98%  cellspacing="0" bgcolor="#CCCCCC" style="margin:auto;border-radius:5px;padding:3px 3px 3px 3px;">';
	echo '<tr>
	<td rowspan="4" style="font-size:11px; width:80%">'. $row["comment"].'</td>
	</tr>';
	echo '<tr>
	<td style="font-size:11px">'. $row["username"].'</td>
	</tr>';
	echo '<tr>
	<td style="font-size:11px">'. $row["time"].'</td>
	</tr>';
	echo '<tr>
	<td style="font-size:11px">'. $row["date"].'</td>
	</tr>';
	echo '</table>';?>
	<section id = "form_before_lunch">
	<input type ="button" name="data" value="comment"/>
	</section>
	<div id="form"> 
	<div id="disp"></div>
	<div id="inp">
	<input type="text" name="comm"/><input type ="submit" value="sent" name="sen"/>
	</div>
	</div>
	<br/>
	<?php
}
?>

</div>
</body>
</html>
<script type = "text/javascript">
		$(document).ready(function(){
			$("#form_before_lunch").click(function(){
				$(this).animate({height:"250px";width:"400px"});
				$(this). children("p").animate({fontSize:"25px"});
				
				$("#form").delay(500).fadeIn();
			})
			
		})
</script>


















