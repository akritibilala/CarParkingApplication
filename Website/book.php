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
	$slot=$_POST['slot'];
	$user=$_SESSION['user'];
	$sec=time();
	$time=strftime("%B %d, %Y %H:%M");
	$del=round(($sec/60)+120);
	$query="INSERT INTO `booking`(`CardNo`, `Slot`, `BookingTime`, `DeleteTime`) VALUES ('".$user."','".$slot."','".$time."','".$del."')";
//echo $query;
	if(mysqli_query($con, $query))
	{
		$query3="update parkinglot set Allocation=1  where Slot='".$slot."'";
	//echo $query3;
		if(mysqli_query($con, $query3))
		{
			$qq="update user set Amount=Amount-20 where CardNo='".$user."'";
			if(mysqli_query($con, $qq))
			{
				echo 'Booking Confirmed';
				header('Location: main.php');
				exit();
			}
			else
			{
				echo 'Unable to deduct cost';
				header('Location: manual.php');
				exit();
			}
		}
		else
		{
			echo 'Slot Table not updated';
			header('Location: manual.php');
			exit();
		}
	}
	else
	{
		echo 'Unable to book';
		header('Location: manual.php');
		exit();
	}
}
else
{
	header('Location: manual.php');
	exit();
}
?>
