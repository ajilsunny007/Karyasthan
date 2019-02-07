
<?php
include("../dbconnection.php");
$u_id=$_POST['category'];
if($u_id=="")
{
	header("location:../admin/admin_addcategory.php?text=Please enter catrgory");
}
else
{
	$category=$_POST['category'];
	$sql="select* from tbl_category where c_name='$category'";
	$result1=mysql_query($sql,$con);
	$rowcount=mysql_num_rows($result1);
	if($rowcount =='1')
	{
		header("location:../admin/admin_addcategory.php?text=Already exist!!");
	}
	else
	{
		$result=mysql_query("insert into tbl_category values('','$u_id')");
		if($result)
		{
		header("location:../admin/admin_addcategory.php?text=New catrgory added");
		}
	}
}

?>
