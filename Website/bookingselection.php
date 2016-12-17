<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('Location: index.php');
	exit();
}
?>
<html>
<head>
	<title>Booking</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			
			color: #8fcc33;

		}
		.navbar{
			background-color: #8fcc33;

		}
		#headd{
			color: white;
		}
		#profile{
			margin-right: 5px;
		}
		.container{
			margin-top: 30px;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid white;
		}
		#delete_button{
			color: white;
			background-color: #d43f3a;
			border: 1px solid white;	
		}
		#dash{
			color: white;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="main.php">
					<span id="headd">Smart Card Parking System</span>
				</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php
		include 'connection.php';
		$q="select Slot, BookingTime from booking where CardNo='".$_SESSION['user']."'";
		$result1 = mysqli_query($con, $q);

		if (mysqli_num_rows($result1) > 0) {
			while($row=mysqli_fetch_assoc($result1)){
				$slot=$row["Slot"];
				$t=$row["BookingTime"];
			}
			?>
			<div class="page-header">
				<h2><center>You already have a booking for the Slot <?php echo $slot.' at '.$t; ?></center></h2>
			</div>
			<button type="button"  id="delete_button" class="btn btn-danger navbar-btn navbar-right" onClick="document.location.href='cancel.php'" data-toggle="tooltip" data-placement="left" title="The booking will be cancelled!!">Click to Cancel Booking</button>
			<button type="button" class="btn btn-success navbar-btn navbar-right" onClick="document.location.href='extend.php'" data-toggle="tooltip" data-placement="left" title="The booking time will be extended by 2hrs from the last booking hours.">Click to Extend Booking Time</button>
			

			<!--<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>-->


			<?php
		}
		else
		{
			?>
			<div class="page-header">
				<h2><center>Booking is valid only upto next 2 hours of booking time.</center></h2>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-6">
					<a href="preffered.php" class="thumbnail">
						<img src="prefff.png" alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-6">
					<a href="manual.php" class="thumbnail">
						<img src="manual.png" alt="...">
					</a>
				</div>
			</div>
			<?php }
			?>
		</div>

		<!-- Button trigger modal -->
		<div class="navbar navbar-default navbar-fixed-bottom" id="footer">
			<div class="container-fluid">
				<button type="button" class="btn btn-default navbar-btn navbar-right" onClick="document.location.href='logout.php'" >Logout</button>
				<span class="navbar-left"><p class="navbar-text pull-left" id="footer_text"><a href="http://tinyurl.com/tbvalid" data-toggle="modal" data-target="#myModal" >Help </a><span id="dash">| </span><a href="team.php"> Team</a> <span id="headd"> |  &copy; Smart Parking System -2016</span>
				
			</p></span>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">General Instructions</h4>
				</div>
				<div class="modal-body">
					<ul>
						<li>The cost of booking a parking slot in advance is Rs. 20/-.</li>
						<li>The parking preference can be changed anytime in the change preference option.</li>
						<li>The booking is valid only for two hours from the time of booking.</li>
						<li>For booking a parking slot in advance you must have sufficient balance in your card.</li>
						<li>For any further query please free to reach us at help@smartparking.com</li>
					</ul>
				</div>
				<div class="modal-footer">
					<i>Thanks</i>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>