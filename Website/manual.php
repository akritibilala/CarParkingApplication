<?php
session_start();
if (!isset($_SESSION['user']))
{
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manual Booking</title>
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
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid white;
		}
		#dash{
			color: white;
		}
		.container{
			margin-bottom: 100px;
		}
		.page-header{
			margin-top: -20px;
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
		<div class="page-header">
			<h2><center>Please select any one slot from the available options.</center></h2>
		</div>

		<form method="post" action="book.php">
			<div class="form-group">
				<div class="row">
					<div class="col-md-9">
						<img src="parking_space.png" class="img-responsive" alt="Responsive image">
					</div>
					<div class="col-md-2">
						<table class="table table-hover">
							<tr>
								<td colspan="2" align="center">Currently Available Slot</td>
							</tr>
							<?php
							include 'connection.php';
							$query1 = "select Slot from parkinglot where Allocation=0";
							$result1 = mysqli_query($con, $query1);

							if (mysqli_num_rows($result1) > 0) {
								while($ro=mysqli_fetch_assoc($result1)){
									$slot=$ro["Slot"];
									echo "<tr>";
									echo "<td><input type='radio' name='slot' id='blankRadio1' value=".$slot." aria-label='...''>&nbsp;</td><td>".$slot."</td>";
									echo "</tr>";	
								}
							}
							else
							{
								echo "No Parking Space available for Booking";
							}
							?>	
						</table>
					</div>
					<div class="col-md-1">
						<button type="submit" class="btn btn-success navbar-btn" name="submit" value="submit" data-toggle="tooltip" data-placement="bottom" title="After clicking your booking will be confirmed and you will be redirected to the Home Page.">Book Slot</button>
					</div>
				</div>
			</div>
		</form>





	</div>  <!-- container ka div-->
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