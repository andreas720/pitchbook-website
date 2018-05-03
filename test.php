<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
	    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>
<body>
<div class="container">
	<h3 id="text-center">Search location:</h3>
	<form id="location-form">
	<input type="text" id="location-input" class="form-control form-control-lg"><br>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
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
		<li class='list-group-item'>${formattedAddress}</li>
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
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1>Lynn MA</h1><h1>Lynn MA</h1>'
        },
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
</body>
	</html>