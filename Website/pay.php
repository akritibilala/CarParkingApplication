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
	<title>Recharge</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			
			color: #8fcc33;
			
		}
		.navbar{
			background-color: #97d041;

		}
		#headd{
			color: white;
		}
		#box
		{
			margin-top: 30px;
		}
		#profile{
			margin-right: 5px;
		}
		.container{
			margin-top: 60px;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid #8fcc33;
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
		<form method="post" action="recharge.php">
			<div class="row">
				<div class="col-md-6 col-md-push-3" id="box">
					<div class="input-group">
						<input type="text" class="form-control" name="amount" placeholder="Please Enter Recharge Amount...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit" name="submit" value="submit">Pay!</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				
			</div>
		</form>
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