<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('Location: index.php');
	exit();
}
include 'connection.php';
$user=$_SESSION['user'];
$q="select Pref from user where CardNo='".$user."'";
$r = mysqli_query($con, $q);
if (mysqli_num_rows($r) > 0) {
	while($ro=mysqli_fetch_assoc($r)){
		$pref=$ro["Pref"];
	}
	$query2="select Slot, ".$pref.", Rating from parkinglot where ".$pref."= (select min(".$pref.") from parkinglot where Allocation=0) and Allocation=0 order by Rating";
	//echo $query2;
	$result2 = mysqli_query($con, $query2);
	if (mysqli_num_rows($result2) > 0) {
		if($row = mysqli_fetch_assoc($result2)) {
			$slot=$row["Slot"];
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
						header('Location: preffered.php');
						exit();
					}
				}
				else
				{
					echo 'Slot Table not updated';
					header('Location: preffered.php');
					exit();
				}
			}
			else
			{
				echo 'Unable to book';
				header('Location: preffered.php');
				exit();
			}
		}
	}
	else
	{
		echo 'No Slot Available';
	}
}
else
{
	echo 'No Preference Available';
}