<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Karyasthan</title>
<link rel="stylesheet" type="text/css" href="style.css">

<style>
.navbar {
    float:right;
    overflow: hidden;
    background-color: ;
    font-family: Arial;
}


.dropdown {
    float: left;
    overflow: hidden;
	
}

.dropdown .dropbtn {
    font-size: 18px;
	font-style:inherit;    
    border: none;
    outline: none;
    color: #FFFFFF;
    padding: inherit;
    background-color: inherit;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #00FF33;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	border-radius:20px;
}

 .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


</head>

<body background="image/admintop.jpg">
<div class="logo"> 
<!-- 	<div style="background:#000000" class="headname" align="center" > <label class="headn"><b class="hd">karyasthan</b></lable></div>
--></div> 
<div class="headtop"><br>
	<div class="logoimg" style="border:solid 3px #FFFFFF"><img  src="image/karyasthan.jpg" width="200" height="200"></div>
		<div align="right" style="padding-left:100px">
			<div class="menu"><a class="menua" href="index.php"><b>Home</b></a></div>
			<div class="menu"><a class="menua" href="Aboutus.php"><b>About</b></a></div>
			<div style="display:inline-block;position: relative;top:26px; right: 30px; padding:20px 30px; background:green; cursor:pointer;background-size: cover;border-radius:15px;"><div class="dropdown">
    							<button class="dropbtn">Registration</button>
    								<div class="dropdown-content">
										<a href="regworker.php">Worker</a>
      									<a href="regcustomer.php">Customer</a>
    									</div>
  								</div> 
			</div>
			<div class="menu"><a class="menua" href="login.php"><b>Login<b></a></div>
		</div>
</div><br><br>
</div>
<body>
</body>
</html>
