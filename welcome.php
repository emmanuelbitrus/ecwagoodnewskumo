<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<link href="sheet.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="comment_style.css">
<script type="text/javascript" src="jquery.js">
<script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comment.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
        document.getElementById("username").value="";
  
      }
    });
  }
  
  return false;
}
</script>
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

</div>
<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">

  <h1>Instant Comment System Using Ajax,PHP and MySQL</h1>

  <form method='post' action="" onsubmit="return post();">
  <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>
  <br>
  <input type="text" id="username" placeholder="Your Name">
  <br>
  <input type="submit" value="Post Comment">
  </form>
  <?php
		include("database.php");

   
  
    $comm = mysql_query("select name,comment,post_time from comments order by post_time desc");
    while($row=mysql_fetch_array($comm))
    {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
    ?>
	
	<div class="comment_div"> 
	  <p class="name">Posted By:<?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p>	
	  <p class="time"><?php echo $time;?></p>
	</div>
  
    <?php
    }
    ?>
</div>
<div id="sidebar">
</div>
<div id="footer"><marquee direction="Lleft">
WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>
</div>
</body>
</html>

