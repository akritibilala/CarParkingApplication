<?php
session_start();
if (!isset($_SESSION['user']))
{
    header('Location: index.php');
    exit();
}
if(isset($_POST['submit']))
{
include 'connection.php';
$amt=$_POST['amount'];
$user=$_SESSION['user'];
$query="update user set Amount=Amount+".$amt." where CardNo='".$user."'";
echo $query;
if(mysqli_query($con, $query))
{
	echo 'Recharge Done';
	header('Location: main.php');
	exit();
}
else
{
	echo 'Recharge cannot be Done';
	header('Location: preference.php');
	exit();
}
}
else
{
	header('Location: preference.php');
	exit();
}