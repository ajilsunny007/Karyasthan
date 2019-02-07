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
<?php
include("admin_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<br><br>
	
	<center>
	<div align="center" style="background:#3366CC;height:auto;width:50%;padding:30px;margin-top:80px;border-radius:20px;opacity:0.8;">
		<div ><font size="8" color="#FFFFFF" face="Times New Roman, Times, serif"><b> USERS</b></font></div>
		
	<?php
			include("../dbconnection.php");
			$sql="SELECT * FROM tbl_reg_user,tbl_login where tbl_reg_user.u_id=tbl_login.u_id";
			$result=mysql_query($sql,$con);
			?>
			<center>
			<table border=5 width="60%" style="border:solid #FF0000 5px;">
			<tr>
			<td  ><font size="+3" ><center>Name</center></font><td> <font size="+3" ><center>Category</center></font><td><font size="+3" ><center>Contact</center></font><td><font size="+3" ><center>Action</center></font>
			<?php
$rowcount=1;
if($rowcount !=0 )
	{	
		while($row=mysql_fetch_array($result))
		{
			
			$u_id=$row['log_id'];
			$u_name=$row['u_name'];
			$u_category=$row['category'];
			$u_contact=$row['contact'];
			$block=$row['block'];
			echo "<form method='post' action='block.php'>";
			echo "<tr><td>$u_name<td>$u_category<td>$u_contact<td><center><input type='submit' value='$block' name='submit' style='color:blue; border-radius:5px ' ></center>";
			echo"<input type='hidden' value='$u_id' name='id'>";
			echo"</form>";
			echo "<form method='post' action='block.php'>";
			echo "<tr><td>$u_name<td>$u_category<td>$u_contact<td><center><input type='submit' value='$block' name='submit' style='color:blue; border-radius:5px ' ></center>";
			echo"<input type='hidden' value='$u_id' name='id'>";
			echo"</form>";
		}

		echo"</table>";
		echo"</center>";
	}
	?>
	
	
	</div>
	</center>
	
</div>

</div>
	<?php
include("footer.php");
?>
</body>
</html>
<?php
}
else
		{
			header("location:../login.php?error=Wrong password!!");
		}
?>
