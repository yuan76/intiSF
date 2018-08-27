<?php
session_start();
include "../conf.php";
$_SESSION['FBID']='123456789012332';
$_SESSION['REF']='a';
$_SESSION['FULLNAME']='minka';
$_SESSION['GENDER']='Female';
$_SESSION['EMAIL']='Jun';
//echo $_SESSION['FULLNAME'];
header("Location: lanjut.php");
//header("Location: index.php");
?>
