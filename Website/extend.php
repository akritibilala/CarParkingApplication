<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('Location: index.php');
	exit();
}
include 'connection.php';
$q="update booking set DeleteTime=DeleteTime+120 where CardNo='".$_SESSION['user']."';";
$q.="update user set Amount=Amount-20 where CardNo='".$_SESSION['user']."'";
if(mysqli_multi_query($con, $q))
{
	echo 'Time Extended';
	header('Location: main.php');
	exit();
}
else
{
	header('Location: bookingselection.php');
	exit();	
}
?>