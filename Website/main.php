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
	<title>Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			
			color: #8fcc33;

		}
		.navbar{
			background-color: #8fcc33;
		}
		#carousel-example-generic{
			margin-top: 10px;
		}
		#headd{
			color: white;
		}
		#footer_text{
			text-align: center;
		}
		.container{
			margin-top: 60px;
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
	</style>
</head>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="main.php">
					<span id="headd">Smart Card Parking System</span>
				</a>
			</div>
			
			<!--<button id="profile" type="button" onClick="document.location.href='profile.php'" class="btn btn-default navbar-btn navbar-right">Profile</button>-->
		</div>
	</nav>

	<div class="container">	
		
		<div class="row">
			<div class="col-xs-6 col-md-6">
				<a href="bookingselection.php" class="thumbnail">
					<img src="parkicon.png" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-6">
				<a href="preference.php" class="thumbnail">
					<img src="pref.png" alt="...">
				</a>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-6 col-md-6">
				<a href="pay.php" class="thumbnail">
					<img src="rec.png" alt="...">
				</a>
			</div>	
			<div class="col-xs-6 col-md-6">
				<a href="profile.php" class="thumbnail">
					<img src="profile.png" alt="...">
				</a>
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
	

</div>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>