<?php
include("../dbconnection.php");
			$sql="SELECT * FROM tbl_booking";
			$result=mysql_query($sql,$con);


if(isset($_POST['id']))
{
	$uid=$_POST['id'];
	$sql="DELETE FROM `tbl_booking` WHERE b_id='$uid'";
	$result=mysql_query($sql,$con);
	header('location:./customer_bookedworkers.php');
	
		
}

?>

