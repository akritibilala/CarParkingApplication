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
	<title>Our Team</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
			margin-bottom: 100px;
		}
		.btn{
			color: white;
			background-color: #8fcc33;
			border: 1px solid white;
		}
		.container{
			margin-bottom: 100px;
		}
		.page-header{
			margin-top: 0px;
		}

/*=========================
  Icons
  ================= */

  /* footer social icons */
  ul.social-network {
  	list-style: none;
  	display: inline;
  	margin-left:0 !important;
  	padding: 0;
  }
  ul.social-network li {
  	display: inline;
  	margin: 0 5px;
  }


  /* footer social icons */

  .social-network a.icoFacebook:hover {
  	background-color:#3B5998;
  }
  .social-network a.icoLinkedin:hover {
  	background-color:#007bb7;
  }
  .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
  .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
  	color:#fff;
  }
  a.socialIcon:hover, .socialHoverClass {
  	color:#8fcc33;
  }

  .social-circle li a {
  	display:inline-block;
  	position:relative;
  	margin:0 auto 0 auto;
  	-moz-border-radius:50%;
  	-webkit-border-radius:50%;
  	border-radius:50%;
  	text-align:center;
  	width: 50px;
  	height: 50px;
  	font-size:20px;
  }
  .social-circle li i {
  	margin:0;
  	line-height:50px;
  	text-align: center;
  }

  .social-circle li a:hover i, .triggeredHover {
  	-moz-transform: rotate(360deg);
  	-webkit-transform: rotate(360deg);
  	-ms--transform: rotate(360deg);
  	transform: rotate(360deg);
  	-webkit-transition: all 0.2s;
  	-moz-transition: all 0.2s;
  	-o-transition: all 0.2s;
  	-ms-transition: all 0.2s;
  	transition: all 0.2s;
  }
  .social-circle i {
  	color: #fff;
  	-webkit-transition: all 0.8s;
  	-moz-transition: all 0.8s;
  	-o-transition: all 0.8s;
  	-ms-transition: all 0.8s;
  	transition: all 0.8s;
  }

  a {
  	background-color: #8fcc33;   
  }
  .caption{
  	text-align: center;
  }
  h3{
  	color: #8fcc33;
  }
  p{
  	color: #8fcc33;
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
			<div class="page-header">
				<center><h1>Our Team</h1></center></div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-4 col-md-offset-4">
					<center><h4>Mentor</h4></center>
					<div class="thumbnail">
						<img src="nalinin.png" alt="..." class="img-circle">
						<div class="caption">
							<h3>Nalini N</h3>
							<p>Assistant Prof(Sr.)</p>
							<ul class="social-network social-circle">
								<li><a href="http://www.facebook.com/nalini.sridhar.3" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.linkedin.com/in" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>
					</div>			
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<div class="thumbnail">
						<img src="preritbhandari.png" alt="..." class="img-circle">
						<div class="caption">
							<h3>Prerit Bhandari</h3>
							<p>Reg. No.: 12BCE0014</p>
							<ul class="social-network social-circle">
								<li><a href="http://www.facebook.com/prerit.bhandari" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.linkedin.com/in/preritbhandari" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="thumbnail">
						<img src="laxayjain.png" alt="..." class="img-circle">
						<div class="caption">
							<h3>Laxay Jain</h3>
							<p>Reg. No.: 12BCE0241</p>
							<ul class="social-network social-circle">
								<li><a href="http://www.facebook.com/jainlaxay" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.linkedin.com/in/laxay-jain-653305108" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="thumbnail">
						<img src="vatsaladaur.png" alt="..." class="img-circle">
						<div class="caption">
							<h3>Vatsala Daur</h3>
							<p>Reg. No.: 12BCE0199</p>
							<ul class="social-network social-circle">
								<li><a href="http://www.facebook.com/vatsala.daur" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.linkedin.com/in/vatsala-daur-5b7551a3" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Button trigger modal -->
		<div class="navbar navbar-default navbar-fixed-bottom" id="footer">
			<div class="container-fluid">
				<button type="button" class="btn btn-default navbar-btn navbar-right" onClick="document.location.href='logout.php'" >Logout</button>
				<span class="navbar-left"><p class="navbar-text pull-left" id="footer_text"><a href="http://tinyurl.com/tbvalid" data-toggle="modal" data-target="#myModal" >Help </a><span id="headd"> |  &copy; Smart Parking System -2016</span>
				
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