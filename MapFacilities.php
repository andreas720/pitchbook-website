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
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>	
	<meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
	
	<style>
#hyp:link, #hyp:visited {
    background-color: white;
    color: black;
    border: 2px solid green;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

#hyp:hover, #hyp:active {
    background-color: green;
    color: white;
}

    #map{
      height:450px;
      width:100%;
    }
  </style>

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
      <div class="container" style="margin-top:60px; background-color:grey"><center>
          <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Display Style: Map</h1>
          </div>
	<div class="row justify-content-around" >
    <div class="col-4">
      <a href="Facilities.php" id="hyp">Grid List of Facilities</a>
    </div>
    <div class="col-4">
      <a href="MapFacilities.php" id="hyp">Map of Facilities</a>
    </div>
  </div>
     </center></div>
	
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

<!-- map of the facilities-->

<div class="container">
	<h3 id="text-center">Search location:</h3>
	<form id="location-form">
	<input type="text" id="location-input" class="form-control form-control-lg"><br>
	<button type="submit">Submit</button>
	</form>
	
	<div class="card-block" id="formatted-address"></div>
	<!--<div class="card-block" id="address-components"></div>
	<div class="card-block" id="geometry"></div>-->
    <div class="card-block" id="map"></div>
	</div>

<script>
//call geocode
//geocode();

//get location form
var locationForm = document.getElementById('location-form');

//Listen for submit
locationForm.addEventListener('submit', geocode);

function geocode(e){
	
	e.preventDefault();
	var location = document.getElementById('location-input').value;
	axios.get('https://maps.googleapis.com/maps/api/geocode/json?',{
	params:{
		address: location,
		key: 'AIzaSyAjwlXstyIQos7hoBRuQ1lvkfFNbr5uHTE'
	}
	})
	.then(function(response){
		//Log Full response
	
		console.log(response);
		
		//formatted Address
		var formattedAddress = response.data.results[0].formatted_address;
		var formattedAddressOutput = `     
		<ul class='list-group'> 
		<li class='list-group-item'><center>${formattedAddress}</center></li>
		</ul>
		`;
	  
	  
	//Address Components
	var addressComponents = response.data.results[0].address_components;
	var addressComponentsOutput = '<ul class="list-group">';
	for(var i = 0;i<addressComponents.length;i++){
		addressComponentsOutput += `
		<li class="list-group-item"><strong>${addressComponents[i].types[0]}</strong>:
		${addressComponents[i].long_name}</li>
		`;
	}
	addressComponentsOutput += '</ul>';
	
	//Geomtry
		var lat = response.data.results[0].geometry.location.lat;
		var lng = response.data.results[0].geometry.location.lng;
		var geometryOutput = `
		<ul class="list-group">
		<li class="list-group-item"><strong>Latitude</strong>:${lat}</li>
		<li class="list-group-item"><strong>Longitude</strong>:${lng}</li>

		</ul>
	`;
	
	//output of map
	        var uluru = {lat:lat, lng:lng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
		var markers = [
        {
          coords:{lat:53.374346,lng:-6.263027699999999},
          content:`<h4>Na Fianna</h4>
		  <h5>All-Weather</h5>
		  <img src="img/test images/Astro.jpg" height="150" width="150">
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> 18 Mobhi rd, Glasnevin, Dublin 9</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 859872564</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is an all weather pitch 250 meters x 300 meters. 
		  This space is equipped with floodlights and has a water proof surface that allows use during all seasons.
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
		  
        `},
		
		        {
          coords:{lat:53.374042,lng:-6.2300634},
          content:`<h4>Vincents</h4>
		  <h5>Gym</h5>
		  <img src="img/test images/StVincents2.jpg" height="150" width="150">
		  
		 
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> 20 Malahide rd, Artane, Dublin 7</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 855351313</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is a gym ..... etc
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
        `},
		 {
          coords:{lat:53.40805,lng:-6.247820000000001},
          content:`<h4>Sports Link</h4>
		  <h5>Swimming pool</h5>
		  <img src="img/test images/swimming pool.jpg" height="150" width="150">
		  
		 
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> Furry Park, Swords rd, Dublin 9</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 859872564</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is a swimming pool ... etc
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
        `},
		        {
          coords:{lat:53.3712996,lng:-6.1798386},
          content:`<h4>Vincents</h4>
		  <h5>Football pitch</h5>
		  <img src="img/test images/Vincents pitch.jpg" height="150" width="150">
		  
		 
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> 20 Malahide rd, Artane, Dublin 7</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 859872564</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is a football pitch.... etc
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
        `},
		
		        {
          coords:{lat:53.3854605,lng:-6.2606336},
          content:`<h4>Na Fianna</h4>
		  <h5>gym</h5>
		  <img src="img/test images/StVincents3.jpg" height="150" width="150">
		  
		 
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> 18 Mobhi rd, Glasnevin, Dublin 9</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 859872564</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is a gym .... etc..
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
        `},
		 {
          coords:{lat:53.3820193,lng:-6.266757399999999},
          content:`<h4>Glasnevin Tennis Club</h4>
		  <h5>Tennis Court</h5>
		  <img src="img/test images/tennis court.jpg" height="150" width="150">
		  
		 
		  <div class='modal-body' style='margin-right:5px'>
		  <div class='.col-md-6' align='left' ><font color='blue'>Location:</font> Ballymun rd, Ballygall, Dublin</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Phone No:</font> 859872564</div><br>
		  <div class='.col-md-6' align='left' ><font color='blue'>Description:</font> This is a tennis court...
		  </div>
		  <button type='button' class='btn btn-primary'>Book Now</button>
		  </div> 
		  
        `},
		
		
        {
          coords:{lat:42.8584,lng:-70.9300},
          content:'<h1>Amesbury MA</h1>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];
	  
	  // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }
	  
	  // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
		
	// Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });
	
	
	//output to app
	document.getElementById('formatted-address').innerHTML = formattedAddressOutput;
	document.getElementById('address-components').innerHTML = addressComponentsOutput;
	document.getElementById('geometry').innerHTML = geometryOutput;

	})
	.catch(function(error){
		console.log(error);
	});
}
</script>
    <script>
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjwlXstyIQos7hoBRuQ1lvkfFNbr5uHTE&callback=initMap">
    </script>


<!-- end of map of facilities-->


	 
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