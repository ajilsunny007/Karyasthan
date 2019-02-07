<?php
session_start();
include("../dbconnection.php");
 $u_id=$_SESSION['u_id'];
 $u_pass=$_SESSION['u_pass'];
 $u_status=$_SESSION['u_status'];
$sql="select* from tbl_login where u_id='$u_id' and u_pass='$u_pass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 && $u_status=='3')
{

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("customer_header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<br><br>
<center>
		<div align="center" style="height:auto;width:50%;background:#FF3300;padding:60px;border-radius:20px;margin-top:80px; opacity:0.8;" >
			<div ><font size="6" color="#000000" face="Times New Roman, Times, serif"><b> WORKERS</b></font></div><br><br>
			
			<table>
			<tr>
			<td>
			<font size="5" color="#000066" face="Arial, Helvetica, sans-serif">SELECT CATEGORY</font>
			</td>
			<td>
			<?php
			include("../dbconnection.php");
			$sql='SELECT * FROM tbl_category' ;
			$result=mysql_query($sql,$con);
			?>
			<form action="" name="workselect" method="post">
	       <select style="border:solid 1px #000;padding:10px;font-size:18px;width:300px;border-radius:15px;margin-bottom:5px;height:auto" name="category" id="category" onchange="">
			<option style="font-size:14px;color:#000000">SELECT</option>
			
			<?php
$rowcount=1;
if($rowcount !=0 )
	{	
		while($row=mysql_fetch_array($result))
		{
			$c_category=$row['c_name'];
			$c_id=$row['c_id'];
			echo "<option style=font-size:14px;color:#000000 value='$c_id'>$c_category</option>";
			
		}

		echo"</select>";
	echo"";
	}
	?>
	<tr><td></td><td>
	<input type="submit" style=" background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 15px;color:#000000;font-style:normal;border-radius:15px;font-weight:bold" value="VIEW" size="60px" name="view"></td></tr>
			</table>
			<center>
			
			 <?php
	 if(isset($_POST['category']))
	 {
	 ?>
	 
	        <table border=5 width='50%'  cellspacing='2px' bgcolor='#FF0000' width='60%' style='border:solid #000000 5px; border:#0000FF solid 5px;'>
			<tr>
			<td style="padding:20px;color:#33FF00;font-size:24px;" ><font size="+3" ><center>Photo</center></font></td>
			<td style="padding:20px;color:#33FF00;font-size:24px;" ><font size="+3" ><center>Name</center></font></td>
			<td style="padding:20px;color:#33FF00;font-size:24px;"> <font size="+3" ><center>Contact</center></font></td>
			<td style="padding:20px;color:#33FF00;font-size:24px;"><font size="+3" ><center>Days</center></font></td>
			<td style="padding:20px;color:#33FF00;font-size:24px;"><font size="+3" ><center>Action</center></font></td></tr>
	<?php
	 	$select=$_POST['category'];
		$sql2="select * from tbl_reg_user where category='$select'";
		$result1=mysql_query($sql2,$con);
		while($row=mysql_fetch_array($result1))
		{
			
			$uid=$row['u_id'];
			$u_name=$row['u_name'];
			$u_category=$row['category'];
			/*$sql3="select * from tbl_category category='$u_category'";
			$result3=mysql_query($sql3,$con);
			while($r=mysql_fetch_array($result3))
			{
			$category=$r['c_name'];
			}*/
			$u_photo=$row['photo'];
			$u_contact=$row['contact'];
			echo "<form method='post'>";
			echo "<tr><td><center><img src='../photo/$u_photo' style='height:80px;width:120px'></center><td>$u_name<td>$u_contact<td><input type='number' name='days' required ><td><center>					                  <input type='submit' value='Book Now' name='submit' style='color:blue'></center></tr>";
			echo"<input type='hidden' value='$uid' name='uid'><input type='hidden' value='$u_category' name='category'>";
			echo"</form>";
		}
		
	 }
	 
	 ?>
	 <?php
	 if(isset($_POST['submit']))
	 {
	 	$uid=$_POST['uid'];
		$days=$_POST['days'];
		$category=$_POST['category'];
		$sql="insert into tbl_booking values('','$uid','$u_id','$category','$days')";
		$result=mysql_query($sql,$con);
	 }
	 ?>
		</div>
		</table>
		</form>
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
