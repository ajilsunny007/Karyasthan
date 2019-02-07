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
        alert ("Please fill in your name.");
        return false;
    }
	if (document.signup.email.value=="")
    {
        alert ("Please fill in your email.");
        return false;
    }
	if (document.signup.category.value=="Select")
	{
        alert ("Select the category.");
        return false;
    }
	if (document.signup.contact.value=="")
	{
        alert ("Please fill in your phone.");
        return false;
    }
	if(isNaN(document.signup.contact.value))
	{
		alert("Please check your number");
		return false;
	}
	if(document.signup.contact.value.length!=10)
	{
		alert("Enter 10 digit number");
		return false;
	}	
	 if (document.signup.photo.value=="")
    {
        alert ("Please select photo.");
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

<div style="height:550px ">

<div style="border:solid 1px ;height:200px;right:0;left:0;display:inline;folat:left;">
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
	<form id="signup" action="regworker_action.php" method="post" id="signup" name="signup" onsubmit="return validationForm()" enctype="multipart/form-data">
	<font color="#000000" face="Times New Roman, Times, serif" size="9">Create new account</font><br>
	<div style="margin-top:-100px;">
	<table>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Name : </font>
	</td>
	<td>
	<input class="input"  type="text" id="fname" name="fname" placeholder="Full name" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Email : </font>
	</td>
	<td>
	<input class="input"  type="email" id="email" name="email" placeholder="Email"  >
	
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Category : </font>
	</td>
	<td>
	<?php
			include("dbconnection.php");
			$sql='SELECT * FROM tbl_category' ;
			$result=mysql_query($sql,$con);
			?>
	
	<select name="category" style="width:320px;border:solid 1px #000;padding:10px;font-size:18px;border-radius:15px;margin-bottom:5px;">
	<option>Select</option>
	
	<?php

		while($row=mysql_fetch_array($result))
		{
			$u_category=$row['c_name'];
			$c_id=$row['c_id'];
			echo "<option style=font-size:14px;color:#000000 value='$c_id'>$u_category</option>";
			
		}

		echo"</select>";
	
	?>
	</td>
	
	<br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Phone : </font>
	</td>
	<td>
	<input class="input"  type="text" id="contact" name="contact" placeholder="Phone Number" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Photo : </font>
	</td>
	<td>
	<input class="input" type="file" id="photo" name="photo" placeholder="" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Password : </font>
	</td>
	<td>
	<input class="input"  type="password" id="password"  name="password" placeholder="Password" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Confirm Password : </font>
	</td>
	<td><input class="input"  type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" >
	</td><br>
	</tr>
	</table>
	<input type="submit" name="upwd"  value="SignUp" style="background:#00FF00;border:solid 1px #000;padding:10px;font-size:18px;width:100px;border-radius:15px;margin-bottom:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input class=""  type="reset" name="reset"  value="Reset" style="background:#00FF00;border:solid 1px #000;padding:10px;font-size:18px;width:100px;border-radius:15px;margin-bottom:5px;" />
	</div>

	</form>
</div>
</center>
<div>
	<?php
include("footer.php");
?>
</div>
</div>

</div>

</body>
</html>