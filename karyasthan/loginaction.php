<?php
session_start();
include("dbconnection.php");

$u_id=$_POST['u_id'];
$u_pass=$_POST['u_pass'];
$sql="select* from tbl_login where u_id='$u_id'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 )
{
	//echo"found";
	while($row=mysql_fetch_array($result))
	{
		$dbu_id=$row['u_id'];
		$dbu_pass=$row['u_pass'];
		$dbu_name=$row['u_name'];
		$dbu_status=$row['u_status'];
		$dbu_block=$row['block'];
		if($dbu_id==$u_id && $dbu_pass==$u_pass && $dbu_status=='1')
		{
			
			$_SESSION['type']="$dbu_name";
			$_SESSION['u_id']="$dbu_id";
			$_SESSION['u_pass']="$dbu_pass";
			$_SESSION['u_status']="$dbu_status";
			header("location:../karyasthan/admin/admin_home.php");
			
		}
		elseif($dbu_id==$u_id && $dbu_pass==$u_pass && $dbu_status=='2')
		{
			if($dbu_block=='Block')
			{
			$_SESSION['type']="$dbu_name";
			$_SESSION['u_id']="$dbu_id";
			$_SESSION['u_pass']="$dbu_pass";
			$_SESSION['u_status']="$dbu_status";
			header("location:../karyasthan/worker/worker_home.php");
			}
			else
			{
				header("location:../karyasthan/login.php?error=User Blocked!!");
			}
		}
		elseif($dbu_id==$u_id && $dbu_pass==$u_pass && $dbu_status=='3')
		{
			if($dbu_block=='Block')
			{
			
			$_SESSION['type']="$dbu_name";
			$_SESSION['u_id']="$dbu_id";
			$_SESSION['u_pass']="$dbu_pass";
			$_SESSION['u_status']="$dbu_status";
			header("location:../karyasthan/customer/customer_home.php");
			}
			else
			{
				header("location:../karyasthan/login.php?error=User Blocked!!");
			}
		}
		else
		{
			header("location:../karyasthan/login.php?error=Wrong password!!");
		}
		
	}
}
else
{
	header("location:../karyasthan/login.php?error=Username not found!!");
}
//echo $rowcount;
//echo $u_id;
//echo $u_pass;
?>