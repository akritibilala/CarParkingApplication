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
	<title>Profile</title>
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
		#box
		{
			margin-top: 30px;
		}
		#profile{
			margin-right: 5px;
		}
		.container{
			margin-top: 20px;
			margin-bottom: 100px;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid white;
		}
		.img-circle{
			margin-top: 25px;
			margin-left: 15px;
		}
		#dash{
			color: white;
		}
		.panel-body{

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
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-sm-4 text-center">
								<img src='profile/<?php echo $_SESSION['user'].".jpg"; ?>' alt="" class="center-block img-circle img-responsive">
							</div><!--/col-->
							<?php
							include 'connection.php';
							$q="select Name, Mobile, Amount, Pref from user where CardNo='".$_SESSION['user']."'";
							$result1 = mysqli_query($con, $q);

							if (mysqli_num_rows($result1) > 0) {
								while($row=mysqli_fetch_assoc($result1)){
									$name=$row["Name"];
									$amt=$row["Amount"];
									$mob=$row["Mobile"];
									$pref=$row["Pref"];
								}
								?>
								<div class="col-xs-12 col-sm-8">
									<h2><?php echo $name; ?></h2>
									<p><strong>Card Number :</strong>  <?php echo $_SESSION['user']; ?></p>
									<p><strong>Preference :</strong>  <?php echo $pref; ?></p>
									<p><strong>Mobile Number :</strong>  +91-<?php echo $mob; ?></p>
									<p><strong>Balance :</strong>  <?php echo $amt; ?>/-</p>
								</div><!--/col-->          
								<?php
							}
							else
							{
								echo 'Invalid User';
							}
							?>

						</div><!--/row-->
					</div><!--/panel-body-->
				</div><!--/panel-->
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