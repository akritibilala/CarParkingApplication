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
$pref=$_POST['pref'];
$user=$_SESSION['user'];
$query="update user set Pref='".$pref."' where CardNo='".$user."'";
//echo $query;
if(mysqli_query($con, $query))
{
	echo 'Preference changed';
	header('Location: main.php');
	exit();
}
else
{
	echo 'Preference cannot be updated';
	header('Location: preference.php');
	exit();
}
}
else
{
	header('Location: preference.php');
	exit();
}