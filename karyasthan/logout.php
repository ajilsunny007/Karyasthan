<?php
session_start();
session_destroy();
header("location:../karyasthan/login.php");
?>