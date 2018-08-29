<?php
session_start();
include "../conf.php";
<<<<<<< HEAD
$_SESSION['FBID']='123456789012334';
$_SESSION['REF']='a';
$_SESSION['FULLNAME']='ridwan';
$_SESSION['GENDER']='Male';
=======
$_SESSION['FBID']='123456789012332';
$_SESSION['REF']='a';
$_SESSION['FULLNAME']='minka';
$_SESSION['GENDER']='Female';
>>>>>>> 62780d854b42ca8da3f727dbdc3a67869998d82f
$_SESSION['EMAIL']='Jun';
//echo $_SESSION['FULLNAME'];
header("Location: lanjut.php");
//header("Location: index.php");
?>
