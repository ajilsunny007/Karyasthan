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
		<div align="center" style="height:auto;width:50%;background:#FF3300;padding:60px;border-radius:20px;margin-top:80px;opacity:0.8;" >
		<font size="+2">
					If you're the type who can (and likes to) do just about anything around the house--mend a leaky faucet, nail down those sagging shingles, paint a wall, unstick a sticking door, repair a broken cabinet or build a garbage can enclosure, then this might be just the business for you. You'll be on-call in your neighborhood for all those jobs that aren't quite big enough to hire an expensive contractor but are beyond the homeowner's expertise or time constraints. This is a business with room for growth: According to the U.S. Census Bureau, Americans spent nearly $43 million on home maintenance and repairs in a single recent year. The advantages to this business are that you can work from home, you can start on a shoestring, you're always doing something different, and it's gratifying. People are delighted when you can save them money by doing the job yourself and appreciative of skills that they don't possess. You'll need a variety of home-repairs skills--everything from minor plumbing to minor electrical to painting and carpentry. You'll want people skills because you'll be dealing with a variety of personalities on their home turf, and a good sense of logistics to help you determine which jobs to schedule in what order.
		
		
<!--			<div ><font size="8" color="#000000" face="Times New Roman, Times, serif"><b> WELCOME ADMIN</b></font></div>

-->		</font>	</div>





		</div>
	</center>
<body>
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
