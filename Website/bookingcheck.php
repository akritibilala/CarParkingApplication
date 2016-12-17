<?php
$ff=0;
$qqq="select Slot, DeleteTime, CardNo from booking";
$output = mysqli_query($con, $qqq);
if (mysqli_num_rows($output) > 0) {
	while($line=mysqli_fetch_assoc($output)){
		$del=$line["DeleteTime"];
		$min=round(time()/60);
		if($min>=$del)
		{
			$slot=$line["Slot"];
			$cardd=$line["CardNo"];
			$q9="delete from booking where Slot='".$slot."' and CardNo='".$cardd."'";
			if(mysqli_query($con, $q9))
			{
				$q10="update parkinglot set Allocation=0 where Slot='".$slot."'";
				if(mysqli_query($con, $q10))
				{
					//booking deleted	
				}
				else
				{
					echo 'Unable to update slot'. mysqli_error($con);
				}
			}
			else
			{
				echo 'Unable to delete from booking'. mysqli_error($con);
			}
		}
	}
	$q11="select Slot from booking where CardNo='".$card."'";
	$out = mysqli_query($con, $q11);
	if (mysqli_num_rows($out) > 0) {
		while($l1=mysqli_fetch_assoc($out)){
			$slot=$l1["Slot"];
			$q9="delete from booking where Slot='".$slot."' and CardNo='".$card."'";
			if(mysqli_query($con, $q9))
			{
				//bboking deleted
			}
			else
			{
				echo 'Unable to delete from booking for allocated slot'. mysqli_error($con);
			}
		}
	}
	else
	{
		$ff=1;
	}
}
else
{
	$ff=1;
}
?>