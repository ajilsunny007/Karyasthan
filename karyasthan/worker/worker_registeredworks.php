<?php
session_start();
include("../dbconnection.php");
 $u_id=$_SESSION['u_id'];
 $u_pass=$_SESSION['u_pass'];
 $u_status=$_SESSION['u_status'];
$sql="select* from tbl_login where u_id='$u_id' and u_pass='$u_pass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 && $u_status=='2')
{

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("worker_header.php");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<br><br>

	<center>
		<div align="center" style="height:auto;width:50%;background:#FF3300;padding:60px;border-radius:20px;margin-top:80px;opacity:0.8;" >
			<div ><font size="6" color="#000000" face="Times New Roman, Times, serif"><b> BOOKINGS</b></font></div>
			
			<table border="5|0" bordercolor="#000000" cellspacing="0" style="border-radius:20px;width:50%;margin-top:50px;">
	<tr>
		<th style="padding:20px;color:#0000FF;font-size:24px;">Name</th>
		<th style="padding:20px;color:#0000FF;font-size:24px;">Phone Number</th>
		<th style="padding:20px;color:#0000FF;font-size:24px;">Days</th>
		<th style="padding:20px;color:#0000FF;font-size:24px;">Action</th>
	</tr>
	<?php
			include("../dbconnection.php");
			$sql="SELECT * FROM tbl_booking where u_id='$u_id'";
			$result=mysql_query($sql,$con);
			while($row=mysql_fetch_array($result))
			{
				$b_id=$row['b_id'];
				$u_name=$row['c_id'];
				$days=$row['b_days'];
				
				$sql2="SELECT * FROM tbl_reg_user where u_id='$u_name'";
				$result2=mysql_query($sql2,$con);
				while($row2=mysql_fetch_array($result2))
				{
					$u_phone=$row2['contact'];
					$uname=$row2['u_name'];
					$sql1="SELECT * FROM tbl_reg_user where u_id='$u_id'";
					$result1=mysql_query($sql1,$con);
					while($row1=mysql_fetch_array($result1))
					{
						$u_name=$row1['u_name'];
						echo "<form action='worker_cancel.php' method='post'>";
						echo "<tr><td style='padding:20px'>$uname<td style='padding:20px'>$u_phone<td style='padding:20px'>$days<td style='padding:20px'><center><input type='submit' value='Cancel' name='submit' style='color:blue'></center>";
						echo"<input type='hidden' value='$b_id' name='id'>";
						echo"</form>";
					}
				}
				
			}
			
			?>
			 <?php
	 if(isset($_POST['submit']))
	 {
	 	$bid=$_POST['bid'];
		$sql="DELETE FROM tbl_booking WHERE b_id='$bid'";
		$result=mysql_query($sql,$con);
		header("location:../worker/worker_registeredworks.php");
	 }
	 ?>
	
	</table>
			
			</div>

		</div>
	</center>
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
