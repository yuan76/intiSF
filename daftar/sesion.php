<?php
session_start();
include "../conf.php";
$_SESSION['FBID']='123456789012336';
$_SESSION['REF']='a';
$_SESSION['FULLNAME']='dudu';
$_SESSION['GENDER']='Male';
$_SESSION['EMAIL']='Jun';
//echo $_SESSION['FULLNAME'];
header("Location: lanjut.php");
//header("Location: index.php");
?>
