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

<img border="0" img align="left" src="ecwa_logo.jpg" width="130" height="119" />
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
<li><a href="login.php">BACK</a></li>
</ul>
</div>

<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">

<?php
include("database.php");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM members ");
      ?>
	 <center><h1>LIST OF CHURCH MEMBERS</h1></center>
	<table width="500" cellpadding=5celspacing=5 border=1 style= "background-color: #CCCC99; color: #0066CC; margin: 0 auto;" >
	
	<tr>
	<th>ID#</th>
	<th>SURNAME</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>DATE OF BIRTH</th>
	<th>GENDER</th>
	<th>TRIBE</th>
	<th>WARD</th>
	<th>BAPTIZED</th>
	<th>CONTACT ADDRESS</th>
	<th>PERMANENT ADDRESS</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	<th>STATE</th>
	<th>L.G.A</th>
	<th>PHONE NUMBER</th>
	<th>EMAIL</th>
	<th>DATE OF REG.</th>
	<th>PASSPORT</th>
	</tr>
	<?php while($row=mysql_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['surname'];?></td>
	<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
	<td><?php echo $row['date_of_birth'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['tribe'];?></td>
	<td><?php echo $row['ward'];?></td>
	<td><?php echo $row['baptized'];?></td>
	<td><?php echo $row['c_address'];?></td>
	<td><?php echo $row['p_address'];?></td>
	<td><?php echo $row['username'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><?php echo $row['state'];?></td>
	<td><?php echo $row['lga'];?></td>
	<td><?php echo $row['gsm'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['date_of_reg'];?></td>
	<td><?php echo $row['passport'];?></td>
	
	</tr>
	<?php endwhile;?> 
	</table>


</div>

<div id="sidebar">
</div>
<div id="footer"><marquee direction="Lleft">
WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>

