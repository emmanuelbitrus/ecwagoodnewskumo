

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ECWA GOODNEWS WEB PAGE.</title>
<script language="javascript">
function check()
{

 if(document.form1.surname.value=="")
  {
    alert("Plese Enter Surname");
	document.form1.surname.focus();
	return false;
  }
 
 if(document.form1.first_name.value=="")
  {
    alert("Plese Enter Your First name");
	document.form1.first_name.focus();
	return false;
  } 
  if(document.form1.last_name.value=="")
  {
    alert("Plese Enter Your Last name");
	document.form1.last_name.focus();
	return false;
  } 
  if(document.form1.date_of_birth.value=="")
  {
    alert("Plese Enter Your date of Birth");
	document.form1.date_of_birth.focus();
	return false;
  }  
  if(document.form1.tribe.value=="")
  {
    alert("Plese Enter Your Tribe");
	document.form1.tribe.focus();
	return false;
  } 
  if(document.form1.ward.value=="")
  {
    alert("Plese Enter Your Ward");
	document.form1.ward.focus();
	return false;
  }  
  if(document.form1.c_address.value=="")
  {
    alert("Plese Enter Your Contact Address");
	document.form1.c_address.focus();
	return false;
  } 
  if(document.form1.p_address.value=="")
  {
    alert("Plese Enter Your Permanent Home Address");
	document.form1.p_address.focus();
	return false;
  } 
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
  if(document.form1.state.value=="")
  {
    alert("Plese Enter Your State");
	document.form1.state.focus();
	return false;
  }
  if(document.form1.lga.value=="")
  {
    alert("Plese Enter Your L.G.A");
	document.form1.lga.focus();
	return false;
  }
  if(document.form1.gsm.value=="")
  {
    alert("Plese Enter Your Phone Number");
	document.form1.gsm.focus();
	return false;
  }
  	if(document.form1.date_of_reg.value=="")
  {
    alert("Plese Enter Your Registration Date");
	document.form1.date_of_reg.focus();
	return false;
  }
  if(document.form1.passport.value=="")
  {
    alert("Plese Upload Your Passport");
	document.form1.passport.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}

  return true;
  }
  
</script>
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
<li><a href="login.php">BACK</a></li>
</ul>
</div>

<div id="main" scrolling="auto " onload="window.scrollTo(0, 0) " src="http://www.myhotels24.eu/fibe.aspx?hid=10000&chid=0&rate=IBE&css=brown " allowtransparency="true ">
     	<form method="post" name="form1" action="signmembers.php" onSubmit="return check();">
		<table width="700" border="0" align="center" height="" bordercolor="#CC9900">
		<caption><h1>New Member Registration Form</h1></caption>
		<tr>
           <td>Surname</td>
           <td><input type="text" name="surname" id="surname"></td>
           <td>First-name</td>
           <td><input type="text" name="first_name" id="first_name"></td>
	 </tr> 
	 
     <tr>
           <td>Last-name </td>
           <td><input name="last_name" type="text" id="last_name"></td>
		   <td>Gender </td>
           <td><input type="radio" name="gender" value="Male" id="gender">Male
		  <input type="radio" name="gender" value="Female" id="gender">Female</td>
     </tr> 
	 <tr>
           <td>Username </td>
           <td><input name="username" type="text" ></td>
		   <td>Password </td>
           <td><input name="password" type="password"></td>
     </tr> 
	 <tr>
           <td>Confirm Password </td>
           <td><input name="cpassword" type="password" id="cpassword" ></td>
		   <td>E-mail Address </td>
           <td><input name="email" type="text" id="email"></td>
     </tr>   
      <tr>
           <td>Phone No. </td>
           <td><input name="gsm" type="text" id="gsm" ></td>
		   <td>Ward</td>
           <td><input name="ward" type="text" id="ward"></td>
     </tr> 
	 <tr>
           <td>Permanent Address </td>
           <td><textarea name="p_address" id="p_address" ></textarea></td>
		   <td>Contact Address</td>
           <td><textarea name="c_address" id="c_address" ></textarea></td>
		  
     </tr> 
	 <tr>
	        <td>Tribe</td>
            <td><input name="tribe" type="text" id="tribe" ></td>
			<td>Baptized</td>
           <td><input type="radio" name="baptized" value="YES" id="baptized">Yes
		   <input type="radio" name="baptized" value="NO" id="baptized">No</td>
		   
      </tr> 
	   <tr>
	        <td>State of Origin</td>
            <td><input name="state" type="text" id="state" ></td>
			<td>L.G.A</td>
            <td><input name="lga" type="text" id="lga" ></td>
		   
      </tr>
	   <tr>
	        <td>Date of birth</td>
            <td><input name="date_of_birth" type="text" id="date_of_birth" ></td>
			<td>Date of Reg.</td>
            <td><input name="date_of_reg" type="text" id="date_of_reg" ></td>
		   
      </tr>
	   <tr>
	  	    <td>Passpord</td>
            <td><input name="passport" type="file" id="passport" value="Browse"></td>
            <td>&nbsp;</td>
            <td> <input name="submit" type="submit"  value="Register"></td>
      </tr> 
	  
	  <tr>
	  <td>&nbsp </td>
	  <td>&nbsp </td>
	  <td>&nbsp </td>
	  <td></td>
	  </tr>
	  
	  </table>



	  </form> 
</div>
		
	
<div id="sidebar">
</div>

<div id="footer">
<marquee direction="Lleft">WELCOME TO ECWA GOODNEWS CHURCH KUMO >>>WHERE EVERYBODY IS SOMEBODY...>>> <br/><center>IN CHRIST IS OUR IDENTITY</center></marquee>
</div>

</div>
</body>
</html>