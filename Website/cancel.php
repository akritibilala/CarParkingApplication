<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('Location: index.php');
	exit();
}
include 'connection.php';
$q1="select Slot from booking where CardNo='".$_SESSION['user']."';";
$res = mysqli_query($con, $q1);
if (mysqli_num_rows($res) > 0) {
		while($l1=mysqli_fetch_assoc($res)){
			$slot=$l1["Slot"];
			break;
			}
			$q="delete from booking where CardNo='".$_SESSION['user']."';";
			$q.="update parkinglot set Allocation=0 where Slot='".$slot."'";
			echo $q;
			if(mysqli_multi_query($con,$q))
			{
				echo 'Booking cancelled';
				header('Location: bookingselection.php');
				exit();
			}
			else
			{
				echo 'Unable to cancel booking';
				header('Location: bookingselection.php');
				exit();
			}
		}
		else
		{
			echo 'No Slot to delete';
			header('Location: bookingselection.php');
			exit();
		}
?>