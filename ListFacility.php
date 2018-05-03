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

  <body background="img/grass.jpg">

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
	
	
	
	<br><br><br><br>

<div class="container" style="background-color:grey; opacity: 0.92;">
<form action="conor.php" method="post">
  <h3>Name of Club/facility:</h3><br>
  <input type="int"id="form2" name="form2" placeholder="Name" required>
  <br>
  
  <h3>Type of Club/facility:</h3><br>
    <input type ="varchar" name="form3" id="form3" placeholder="type" required>
  <datalist id="form3">
    <option value="GAA">
    <option value="Gym">
    <option value="Tennis">
    <option value="Soccer">
    <option value="Rugby">
	<option value="Badminton">
    <option value="Spinning">
    <option value="Swimming">
  </datalist>
  <br><br>
  
    <h2>Contact info:</h2><br>
	<h3>Phone:</h3><br>
  <input type="int" id="form4"name="form4" placeholder="(+353)" required>
  <br>
	<h3>Email:</h3><br>
    <input type="varchar" name="form5" id="form5" placeholder="email" required>
  <br><br>
  
  <h2>Step 2: Rented Space Information</h2><br>
  <h3>Enter type of Space:</h3><br>
    <input list="form6" type="varchar" id="form6" name="form6" placeholder="type" required>
  <datalist id="form6">
    <option value="GAA Pitch">
    <option value="All-Weather pitch">
    <option value="gym">
    <option value="exercise room">
    <option value="tennis court">
	<option value="Soccer pitch">
    <option value="Rugby pitch">
    <option value="swimming pool">
  </datalist>
  <br><br>
  
  <h3>Short description describing space:</h3><br>
  <textarea type="text" id="form7" name="form7" rows="3" cols="5" placeholder=" Enter your description" required></textarea>
  <br><br>
  
  <h3>Location:</h3><br>
  
		Enter your address:  <input type="varchar" name="form8" id="location-input" placeholder="Street address,P.O. box" required>

 <br><br>
  

  
    <h3>Select images to upload:</h3><br>

	




	
<input type="submit" value="Submit">
</form>

<br><br>


	</div>
	
	
	
	
	
	
	
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