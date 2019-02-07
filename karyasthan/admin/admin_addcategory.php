<?php
session_start();
include("../dbconnection.php");
 $u_id=$_SESSION['u_id'];
 $u_pass=$_SESSION['u_pass'];
 $u_status=$_SESSION['u_status'];
$sql="select* from tbl_login where u_id='$u_id' and u_pass='$u_pass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 && $u_status=='1')
{

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin_header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<br><br>
	
	<center>
	<div align="center" style="background:#3366CC;height:auto;width:50%;padding:20px 0px;border-radius:20px;margin-top:80px;opacity:0.8;">
		<?php
if(isset($_GET['text']))
{
	$text=$_GET['text'];
	echo "<font color=red size=5>".$text."</form>";
	echo"</font>";
}
?>
	<form action="categoryaction.php" method="post" name="cat" id="cat">
	<input id="category" type="text" name="category" style="border:solid 1px #000;padding:10px;font-size:18px;width:300px;border-radius:15px;margin-bottom:5px;" placeholder="Enter new category" > 
	<input type="submit" style=" background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 15px;color:#000000;font-style:normal;border-radius:15px;font-weight:bold" value="ADD" size="60px" >
	</form>
	<br><br><br>
	<!--</div>-->
	<!--<div align="center" style="background:#FF0000;height:auto;width:50%;">-->
	<?php
			include("../dbconnection.php");
			$sql='SELECT * FROM tbl_category';
			$result=mysql_query($sql,$con);
			?>
	<table border="5|0" bordercolor="#000000" cellspacing="0" style="border-radius:20px;height:50%;width:50%;">
	<tr>
		<th style="padding:20px;color:#FF0000;font-size:24px;" align="center" >CATEGORY</th>
		
	</tr>
	<?php
	
		while($row=mysql_fetch_array($result))
		{
			$u_category=$row['c_name'];
			echo "<tr><td><center>$u_category";
			
		}

		echo"</table>";
		echo"</center>";
	
	?>
	</div>
	</center>
	
</div>
	
</div>
	<?php
include("footer.php");
?>
<body>
</body>
</html>
<?php
}
else
		{
			header("location:../login.php?error=Wrong password!!");
		}
?>
