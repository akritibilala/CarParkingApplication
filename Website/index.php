<?php
if(isset($_POST['submit'])){
	include 'connection.php';
	if(!empty($_POST['user_name']) && !empty($_POST['password'])){
		$query1 = "select Password from user where CardNo='".$_POST['user_name']."'";
		//echo $query1;
		$result1 = mysqli_query($con, $query1);
		if (mysqli_num_rows($result1) > 0) {
			while($row=mysqli_fetch_assoc($result1)){
				$pass=$row['Password'];
				if($pass==$_POST['password'])
				{
					session_start();
					$_SESSION['user']=$_POST['user_name'];
					header('Location: main.php');
					exit();
				}
				else
				{
					echo 'Error Login';
				}
			}
		}
	}
}
?>
<html>
<head>
	<title>Login</title>
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
		h2{
			color: #97d041;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
		}
		#dash{
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->


			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="covv.png"  height="350px">

				</div>
				<div class="item">
					<img src="carousel03.png"  height="350px">
				</div>
				<div class="item">
					<img src="carousel04.png"  height="350px">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="row">
			<div class="col-lg-5"></div>
			<div class="form-group col-lg-6">
				<h2>Login</h2>
			</div>
		</div>
		<form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post" > <!--yeh tu dekh lena-->
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="form-group col-lg-4">
					<label>Enter Card No.</label>
					<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="form-group col-lg-4">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="pass" placeholder="Enter password">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="form-group col-lg-4">
					<button type="submit" name="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>

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