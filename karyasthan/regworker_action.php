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
include("dbconnection.php");
$u_id=$_POST['email'];
$u_name=$_POST['fname'];
$u_contact=$_POST['contact'];
$u_category=$_POST['category'];
$u_pass=$_POST['cpassword'];
$sql="select* from tbl_reg_user where u_id='$u_id'";
$result1=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result1);

$new_file_image =  time().$_FILES['photo']['name'];

if($rowcount =='1')

{
	header("location:../Karyasthan/regcustomer.php?text=Already Exist!!!");
}
else
{
move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$new_file_image);

$result=mysql_query("insert into tbl_reg_user values('$u_id','$u_name','$u_contact','$u_category','$new_file_image','$u_pass')");
$rs=mysql_query("insert into tbl_login values('$u_id','$u_name','$u_pass','2','Block','')");
header("location:../karyasthan/regworker.php?text=Registration completed");
}

?>