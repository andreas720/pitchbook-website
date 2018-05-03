<!DOCTYPE html>
<html lang="en">
<?php session_start();
?>
  <head>

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

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">PitchBook</a>
		 <button class="nav+bar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

		
	<div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a  class="nav-link js-scroll-trigger" href="index.php" >Home</a>
            </li>
			<li class="nav-item">
              <a  class="nav-link js-scroll-trigger" href="#Renting" title="Find out how Renting a Facility Works"  data-placement="bottom" data-toggle="popover" data-trigger="hover" >Renting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Listing" title="Find out how Listing A Facility Works"  data-placement="bottom" data-toggle="popover" data-trigger="hover">Listing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Description">Description</a>
            </li>
	       <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#About">About us</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Contact">Contact</a>
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
			
            <li><a href="userpage.php">View Profile</a></li>
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

    <!--Renting Sports pitch/facility -->
	<section id="Renting" style="background-color:#dfe8d7">	
		<br><br>	<br><br>
<h1><center>How does renting Work?</center></h1>

	
    <!-- Icons Grid for Renting Sports pitch/facility -->

    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Step 1</h3>
              <p class="lead mb-0">Sign up and Login as a user</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-calendar m-auto text-primary"></i>
              </div>
              <h3>Step 2</h3>
              <p class="lead mb-0">Choose from the list of facilities and pick your required time and date</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Step 3</h3>
              <p class="lead mb-0">Confirm your booking and Pay for the facility</p>
            </div>
          </div>
        </div>
		<br><br>
	 <form action="http://34.251.76.31/Facilities.php">
   <center>Go to the List of Facilities Page: <input type="submit" value="Facilities" /></center>
</form>
      </div>
    </section>
	</section>
		

		<!-- Steps to Listing Pitch/sports facilities -->
	<section id="Listing" style="background-color:#dfe8d7;">
		<br><br><br><br>
	<h1><center>Steps to Listing pitch/Sports Facilities</center></h1>
	

		<!-- Icons Grid for Listing pitch and sports facilities -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Step 1</h3>
              <p class="lead mb-0">Sign up and Login as owner of facility</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-docs m-auto text-primary"></i>
              </div>
              <h3>Step 2</h3>
              <p class="lead mb-0">Fill out facility registration form</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Step 3</h3>
              <p class="lead mb-0">Confirm registration of your facility</p>
            </div>
          </div>
        </div>
	 <br><br><form action="http://34.251.76.31/ListFacility.php">
   <center>Follow Link to List your Facility: <input type="submit" value="Facilities" /></center>
</form>
      </div>
    </section>
	</section>
	
	
    <!-- have different things talking about the website here -->
		<section id="Description">
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters" style="background-color:#c9c9c9">

          <div class="col-lg-6 order-lg-2 text-white showcase-img"><img src="img/Facilities.jpg" height="100%" width="100%" style="position: absolute; bottom:0;"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>The Idea</h2>
            <p class="lead mb-0">Pitch Book is a pitch and facility booking application which allows clubs and fitness centres to manage the bookings of their facilities on a centralised server,
			and allows them utilise their facilities through peak and off-peak times.</p>
          </div>
        </div>
        <div class="row no-gutters" style="background-color:#e2e2e2">
          <div class="col-lg-6 text-white showcase-img"><img src="img/CoachandOwner.jpg" height="100%" width="100%" style="position: absolute; bottom:0;"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Our Motivation</h2>
            <p class="lead mb-0">As part of our 4th year project we had to create a web application which was innovative.
			We Choose to do a centralised pitch booking system which can allow users book facilities and facility owners list their facilities on our website.<br><br>
			1. Managers requiring facilities waste time searching for suitable facilities to meet their needs. <br><br>
			2. Facility owners have facilities lying idle at different times of the day. 
			<p>
          </div>
        </div>
        <div class="row no-gutters" style="background-color:#c9c9c9">
          <div class="col-lg-6 order-lg-2 text-white showcase-img"><img src="img/idea.jpg" height="100%" width="100%" style="position: absolute; bottom:0;"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>About us and our Journey</h2>
            <p class="lead mb-0">Being heavily involved in sport and being involved in different clubs and the management of different sports teams, we have found it difficult to 
			acquire proper training facilities to suit our needs.<br> Finding it harder to find suitable facilities during the wet winter months, we found the gap in the market, and try to exploit it by allowing people book all the facilities they require under a central site and prevent the hassle of ringing up/ or booking through email which requires a reception.
			We thought "lets solve this problem"..</p>
          </div>
        </div>
      </div>
    </section>
	</section>
	
	
	
	
    <!-- About us -->
		<section id="About">
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">About Us</h2>
        <div class="row">

         <div class="col-lg-6">
        <!--     <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/Conor.jpg" height="420" width="420">
              <h5>Conor Dolan - Enterprise Computing 4th Year</h5>
              <p class="font-weight-light mb-0"></p>
            </div>
			-->
			<div class="card">
  <img src="img/Conor.jpg" alt="John" style="width:100%">
  <h1>Conor Dolan</h1>
  <p class="title">Co-Founder</p>
  <p>Dublin City University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
          </div>
		  
		  
          <div class="col-lg-6">
			<div class="card">
  <img src="img/Andreas.jpg" alt="John" style="width:100%">
  <h1>Andreas Poppmeier</h1>
  <p class="title">Co-Founder</p>
  <p>Dublin City University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
          </div>
        </div>
      </div>
    </section>
	</section>
	
	
	
	
    <!-- Contact form -->
	<section id="Contact">
    <section class="call-to-action text-white text-center">

<h3>Contact Us with any Queries</h3>
<?php 
if(isset($_POST['submit'])){
    $to = "conor.dolan26@mail.dcu.ie"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    //'Location: index.html';
    }
?>

<div class="container" style="background-color:#333333; opacity: 0.92;">
  <form action="" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="full_name" placeholder="Your Full name..">
<br>
    <label for="lname">Email Address</label>
    <input type="text" id="lname" name="email" placeholder="Your email address..">

<br>
    <label for="lname">Query</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>

    </section>
	</section>
	
	
	
	
	
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
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>

</html>
