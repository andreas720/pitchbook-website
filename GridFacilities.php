<!DOCTYPE html>
<html>
<?php session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PitchBook - List of Facilities</title>

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
	
    <link href="main.css" rel="stylesheet">
    <link href="main.js" rel="stylesheet">
	

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
	
    <!-- Masthead search at top -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Book state-of-the-art sports facilities and venues all around Ireland</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="search" class="form-control form-control-lg" placeholder="Try &quot;Football pitch in Raheny, Dublin&quot;" >
                </div>
                <div class="col-12 col-md-3">
                  <div id="btn-search">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
                  <div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
	
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

$SQL = "SELECT * FROM facilities";;
			
		
			mysql_select_db($dbname);
			$result = mysql_query($SQL, $conn);
		$row = mysqli_fetch_array($result);
		$evan = $row['facility_id'];


?>
	

	


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


echo "
	<div class='view'>
	<!-- Blueprint header -->
	<header class='bp-header cf'><!-- ... --></header>
	<!-- Product grid -->
	<section class='grid'>
	";

if ($result->num_rows > 0) {

    // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
		//Code for the span of modal when view item is clicked
		
$Name = $row['facility_name'];
//echo '<img src="data:space_Img1/*;base64,'.base64_encode($row["space_Img1"]). ' " /> ';

		echo"	
		<div class='product'>
		<div class='product__info'>";
		echo '<img class="product__image" src="data:space_Img1/*;base64,'.base64_encode($row["space_Img1"]). ' "height="250" width="250" /> ';
		echo"	<h3 class='product__title'>Test</h3>
				<span class='product__year extra highlight'>2011</span>
				<span class='product__region extra highlight'>Douro</span>
				<span class='product__varietal extra highlight'>Touriga Nacional</span>
				<span class='product__alcohol extra highlight'>13%</span>
				<span class='product__price highlight'>" . $row['facility_name'] . "</span>
				<span class='product__price highlight'>" . $row['space_type'] . "</span>
				<span class='product__price highlight'>" . $row['space_location1'] . "</span>
				
				
				<div id='testmodal' class='modal fade'>
				<div class='modal-dialog modal-lg'>
					<div class='modal-content'>
						<div class='modal-header'> 
						<span class='product__price highlight'>" .  $row['facility_name'] ."</span>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						</div>
					<div class='modal-body' style='margin-right:5px'>
					<img src='img/test images/Astro.jpg' style='margin-right:10px' height='250' align='left' width='250' alt='Product 1' />
					<div class='.col-md-6' align='left' ><font color='blue'>Facility:</font> &ensp;" . $row['space_type']  . "</div>
					<div class='.col-md-6' align='left' > <font color='blue'>Location:</font> &ensp;" . $row['space_location1'] . "</div><br>
					<div class='.col-md-6' align='left' > <font color='blue'>Phone Number:</font> &emsp;" . $row['contact_phone'] . "</div>
					<div class='.col-md-6' align='left' > <font color='blue'>Email Address:</font> &emsp;" . $row['contact_email'] . "</div>
					<div class='.col-md-6' align='left' > <font color='blue'>Description:</font> &emsp;" . $row['space_description'] . "</div>

					
					</div>
					<div class='modal-footer'>
						<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						<button type='button' class='btn btn-primary'>Book Now</button>
					</div>
				</div>
				</div>
				</div>
				
				<!--<div id='element' class='btn btn-default show-modal'>show modal</div>-->
				
				
				<button id='testmodal' class='action action--button show-modal'>
					<i class='fa fa-plus-square'></i>
					<span class='action__text'>View Item</span>
				</button>

				
		</div>
		</div>

		";

		
   
   }
    echo "	
		</section>
		";
} 
echo" </div><!-- /view -->";
/*else {
    echo "0 results";
}
*/
$conn->close();

?>	 
	 
	 
	
	 
	 <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; www.pitchbook.ie 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

   




   <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- My custom JS script -->
    <script src="./js/main.js"></script>
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

</script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script>
$(document).ready(function(){
  var show_btn=$('.show-modal');
  var show_btn=$('.show-modal');
  //$("#testmodal").modal('show');
  
    show_btn.click(function(){
      $("#testmodal").modal('show');
  })
});

$(function() {
        $('#element').on('click', function( e ) {
            Custombox.open({
                target: '#testmodal-1',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
</script>

</body>
</html>