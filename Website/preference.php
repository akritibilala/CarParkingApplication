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
	<title>Preference</title>
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
		.container{
			margin-top: 30px;
		}
		#profile{
			margin-right: 5px;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid white;
		}
		#dash{
			color: white;
		}
		#ins{
			padding: 10px;
			margin-bottom: 80px;
			border: 2px solid #8fcc33;
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
		<form method="post" action="onsubmit.php">
			<div class="row">
				<div class="col-md-3 col-md-push-3">
					<div class="radio">
						<label>
							<input type="radio" name="pref" id="blankRadio1" value="WalkingDistance" aria-label="...">Least Walking Distance
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pref" id="blankRadio1" value="DrivingDistance" aria-label="...">Least Driving Distance
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pref" id="blankRadio1" value="Security" aria-label="...">High Security
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pref" id="blankRadio1" value="Slash" aria-label="...">Slash Type Parking
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pref" id="blankRadio1" value="Parallel" aria-label="...">Parallel Type Parking
						</label>
					</div>


				</div>
				<div class="col-md-2 col-md-push-4">
					<button type="submit" name="submit" value="submit" class="btn btn-default btn-md">Submit</button>
				</div>
			</div>
		</form>
		<div class="row" id="ins">
			<div class="col-md-7 col-md-push-3">
				<p>
					<h3>For your help</h3>
					<ul>
						<li>Least Walking Distance : Minimum distance from the elevators.</li>
						<li>least Driving Distance: Minimum driving distance from the entry in parking area.</li>
						<li>High Security : Maximum coverage under CCTV cameras.</li>
						<li>Slash Type Parking : <img src="SlashParking.JPG"></li>
						<li>Parallel Type Parking : <img src="ParallelParking.JPG"></li>
					</ul>
				</p>
			</div>
		</div>
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