<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VEEDU.com</title>
<link rel="stylesheet" type="text/css" href="style.css">


<script language="javascript1.5" type="text/javascript">
function validationForm(signup)
{

	if (document.signup.fname.value=="")
    {
        alert ("Please fill in your user name.");
        return false;
    }
	if (!isNaN(document.signup.fname.value))
    {
        alert ("Please enter your user name correctly.");
        return false;
    }
	
    if (document.signup.email.value=="")
    {
        alert ("Please fill in your email.");
        return false;
    }
	if (document.signup.phone.value=="")
	{
        alert ("Please fill in your phone.");
        return false;
    }
	if(isNaN(document.signup.phone.value))
	{
		alert("Please check your number");
		return false;
	}
	if(document.signup.phone.value.length!=10)
	{
		alert("Enter 10 digit number");
		return false;
	}	
    if (document.signup.password.value=="")
    {
        alert ("Please fill in your password.");
        return false;
    }
	if (document.signup.cpassword.value=="")
    {
        alert ("Please fill in your confirm password.");
        return false;
    } 
	if (document.signup.password.value!=document.signup.cpassword.value)
    {
        alert (" password mismatch.");
        return false;
	}

}
</script>
</head>
<body>

<div style="height:550px; ">

<div style=" ;border:solid 1px ;height:200px;right:0;left:0;display:inline;folat:left;">
<style>
	.input{border:solid 1px #000;padding:10px;font-size:18px;width:300px;border-radius:15px;margin-bottom:5px;}
</style>
<center>
<div style="background-color:#FFFFFF;height:auto;width:20%">
<?php
if(isset($_GET['text']))
{
	$text=$_GET['text'];
	echo "<font color=red size=5>".$text;
}
?>
</div>
<div  style=" margin-top:40px; background:#FFFF00; width:35%;padding:20px;border-radius:20px; opacity:0.9;">
	<font color="#000000" face="Times New Roman, Times, serif" size="9">Create new account</font>
	<form id="signup" action="regcustomer_action.php" method="post" name="signup" >
	<table>
	<tr>
	<td><font size="5" face="Times New Roman, Times, serif" color="#000000">Name</font></td>
	<td>
	<input class="input"  type="text" name="fname" placeholder="Full name"><br>
	</td>
	</tr>
	<tr>
	<td><font size="5" face="Times New Roman, Times, serif" color="#000000">Email</font></td>
	<td>
	<input class="input"  type="email" name="email" placeholder="Email"><br>
	</td>
	</tr>
	<tr>
	<td><font size="5" face="Times New Roman, Times, serif" color="#000000">Contact</font></td>
	<td>
	<input class="input"  type="text" name="phone" placeholder="Phone Number"><br></td>
	</tr>
	<tr>
	<td><font size="5" face="Times New Roman, Times, serif" color="#000000">Password</font></td>
	<td>
	<input class="input"  type="password" name="password" placeholder="Password"><br></td>
	</tr>
	<tr>
	<td><font size="5" face="Times New Roman, Times, serif" color="#000000">Confirm Password</font></td>
	<td>
	<input class="input"  type="password" name="cpassword" placeholder="Confirm Password"></td>
	<br><br>
	</tr>
	<tr>
	<td></td>
	<td>
	<input class=""  type="submit" name="upwd"  value="SignUp" style="background:#00FF00;border:solid 1px #000;padding:10px;font-size:18px;width:100px;border-radius:15px;margin-bottom:5px;" onclick="return validationForm()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class=""  type="reset" name="reset"  value="Reset" style="background:#00FF00;border:solid 1px #000;padding:10px;font-size:18px;width:100px;border-radius:15px;margin-bottom:5px;" /></td></tr></table>
	</form>
</div>

</div>

</div>
	<?php
include("footer.php");
?>

</body>
</html>