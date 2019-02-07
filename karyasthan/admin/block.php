<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
include("../dbconnection.php");
			$sql="SELECT * FROM tbl_reg_user,tbl_login where tbl_reg_user.u_id=tbl_login.u_id";
			$result=mysql_query($sql,$con);


if(isset($_POST['id']))
{
	$uid=$_POST['id'];
	$status=$_POST['submit'];
	if($status=='Block')
	{
			$sql="update tbl_login set block='Unblock' where log_id='$uid'";
			$result=mysql_query($sql,$con);
			header('location:./admin_userlist.php');
	}
	elseif($status=='Unblock')
	{
		
			$sql="update tbl_login set block='Block' where log_id='$uid'";
			$result=mysql_query($sql,$con);
			header('location:./admin_userlist.php');

	}
		
}

?>
