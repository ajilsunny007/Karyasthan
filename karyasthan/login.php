<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VEEDU.com</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
include("dbconnection.php");
?>


<div align="center" style="background:url(pic2.jpg);height:500px;width:100%; ">
<style>
	.input{border:solid 1px #000;padding:10px;font-size:18px;width:300px;border-radius:15px;margin-bottom:5px;}
</style>
	<div align="center" style=" margin-top:80px; background:#FFFF00; width:35%;padding:40px 1px;border-radius:20px;opacity:0.9;">
			<font color="#000000" face="Times New Roman, Times, serif" size="+6" >Login<br>
			<?php
if(isset($_GET['error']))
{
	$error=$_GET['error'];
	echo "<font color=red size=5>".$error;
}
?>
			<form action="loginaction.php" method="post">
			<font size="5" face="Times New Roman, Times, serif" color="#000000">Username : </font><input class="input"  type="text" name=u_id placeholder="Username"><br>
			<font size="5" face="Times New Roman, Times, serif" color="#000000">Passwors : </font><input class="input"  type="password" name=u_pass placeholder="Password"><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="background:#00FF00; margin-top:20px;" class="input"  type="submit" name="upwd"  value="LogIn" ><br>
			<a href="Forgotpassword.php"><font color="#0000FF" size="4" face="Times New Roman,Italic">Forgot Password</font></a>
			</form>
			
	</div>
</div>
	<?php
include("footer.php");
?>
</body>
</html>




