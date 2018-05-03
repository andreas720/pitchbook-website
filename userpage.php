<!DOCTYPE html>
<html>
<?php session_start();
?>
<head>
<script>
 n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</script>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PitchBook - HomePage</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

	
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
	
	    <link href="css/ContactSection.css" rel="stylesheet">
		
		<!-- link to css for About us Profile cards -->	
	    <link href="css/ProfileCard.css" rel="stylesheet">
		
		<!-- link to css for LoginRegister -->	
	    <link href="css/LoginRegister.css" rel="stylesheet">
		
    <!-- My Custom style theme -->
    <link href="css/custom.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link href="css/companyfacility.css" rel="stylesheet">
</head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">PitchBook</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

		
	<div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a  class="nav-link js-scroll-trigger" href="index.php" >Home</a>
            </li>
			<li class="nav-item">
              <a  class="nav-link js-scroll-trigger" href="index.php#Renting" title="Find out how Renting a Facility Works"  data-placement="bottom" data-toggle="popover" data-trigger="hover" >Renting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#Listing" title="Find out how Listing A Facility Works"  data-placement="bottom" data-toggle="popover" data-trigger="hover">Listing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#Description">Description</a>
            </li>
	       <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#About">About us</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#Contact">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" > &nbsp &nbsp &nbsp &nbsp </a>
            </li>
			
			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.php" id="loginID">Log in</a>
            </li>
			
			  <div class="btn-group show-on-hover" id="dropdownuser">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <?php 
	if(isset($_SESSION['user']) && !empty($_SESSION['user']))
		echo $_SESSION['user'];
	else
		echo "";
	?> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
		  <?php if(isset($_SESSION['type']) && !empty($_SESSION['type']) ){ ?>
            <li><a href="comany.php">View Profile</a></li>
		  <?php } else { ?>
			
            <li><a href="#">View Profile</a></li>
		  <?php } ?>
            
          </ul>
        </div>

			
			
	<?php 
	if(isset($_SESSION['user']) && !empty($_SESSION['user'])){?>
	<style>#loginID{
		display:none;
	}
	#signupID{
		display:none;
	}

	</style>
	<?php } ?>
	<?php 
	if(!isset($_SESSION['user']) && empty($_SESSION['user'])){?>
	<style>#logOUT{
		display:none;
	}
	#dropdownuser{
		display:none;
	}
	</style>
	<?php } ?>

	
	 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" id="logOUT">Log out</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.php" id="signupID">Sign up</a>
            </li>
		
			
			
			
          </ul>
        </div>
      </div>
    </nav>

<?php
$servername = "localhost";
$username = "root";
$password = "Agg2vJKvGUng";
$dbname = "registerfacility";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM facilities";
$result = $conn->query($sql);
?>






<div class="container">
	<div class="row">

		<section class="content">
			<h1> <?php
			
				echo "Conor's Account:" . mysql_real_escape_string($_POST['$result'])
			?></h1>
			<h3> My Bookings:<h3>
			<div class="col-lg-12 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Available</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pending</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelled</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">All Facilities</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr data-status="pagado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="index.php" class="pull-left">
													<img src="img/grass.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right"id="demo"></span>
													<h4 class="title">
														Facility
														<span class="pull-right pagado">Available</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox3">
												<label for="checkbox3"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="img/grass.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right" id="demo1"></span>
													<h4 class="title">
														Facility 2
														<span class="pull-right pendiente">Pending</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="cancelado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox2">
												<label for="checkbox2"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="img/grass.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right" id="demo2"></span>
													<h4 class="title">
														Facility 3
														<span class="pull-right cancelado">Cancelled</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pagado" class="selected">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox4" checked>
												<label for="checkbox4"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star star-checked">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="img/grass.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right" id="demo3"></span>
													<h4 class="title">
														Facility 4
														<span class="pull-right pagado">Available</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pagado">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox5">
												<label for="checkbox5"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="img/grass.jpg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right" id="demo4"></span>
													<h4 class="title">
														Facility 5
														<span class="pull-right pagado">Available</span>
													</h4>
													<p class="summary">Ut enim ad dddddddddddddddddddddddddddminim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="content-footer">
					<p>
						Page © - 2016 <br>
						Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>

<script>
$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
 
var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();

newdate = year + "/" + month + "/" + day;

document.getElementById("demo").innerHTML = newdate;
document.getElementById("demo1").innerHTML = newdate;
document.getElementById("demo2").innerHTML = newdate;
document.getElementById("demo3").innerHTML = newdate;
document.getElementById("demo4").innerHTML = newdate;

</script>
</body>
</html>