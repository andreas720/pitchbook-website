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
	
	
	<div class="container">
	<div class="row">
	<div class="col-sm-12" style="margin-top: 60px;">
		<h1> My Account </h1>
	</div>
	</div>
	</div>
	
	<div class="container">
	<div class="row">
	<div class="col-sm-4">
		<h2> My Listings:<h2>
	</div>
	<div class="col-sm-10">
	

						
						
									<table class="table">
										<thead>
											<tr>
											  
											  <th scope="col"><u>space type</u></th>
											   <th scope="col" id="hidecolumn"><u>Description</u></th>
											  <th scope="col" id="hidecolumn"><u>Location</u></th>
											  <th scope="col" id="hidecolumn"><u>Image</u></th>
											</tr>
										</thead>
										<tbody>
										<?php
										$server = "localhost";
		$user = "root";
		$password = "Agg2vJKvGUng";
		$dbname = "registerfacility";
		$company_id = $_SESSION["company"];

		$conn = mysql_connect($server, $user, $password);

$SQL = "SELECT * FROM facilities where company_id = '$company_id'";
			mysql_select_db($dbname);
			$result = mysql_query($SQL, $conn);   
	

//now in the loop you've got to be careful with the css classes, as your html shows, they won't be always the same. But this should give you some insight on how it works.

while($fetch = mysql_fetch_array($result)){

    $info	.='<tr>';// add css classes and the like here. In case you don't know, the .= operators concatenate the strings that will make your html code.
	 $info.='    <td>'. $fetch['space_type'] .'</td>'; 
	   $info .='    <td>'. $fetch["space_description"] .'</td>'; 
	   $info .='    <td> '. $fetch["space_location1"] .'</td>';
	$info .="    <td> <img class='product__image' src='data:space_Img1/*;base64,".base64_encode($row['space_Img1']). " ' height='50' width='50' /> </td>";
 $info .='    </tr>';
 
}

?>
 <?php echo $info; 
?>

										 </tbody>
								</table>
								
		<a href="ListFacility.php" class="btn btn-lg btn-success">Create a listing</a>

							  </div>
							</div>
						

	
	</div>
<H2>Put something else in</h2>
<div class="container">
	<div class="row">
	<div class="col-sm-6">


	</div>
	
	</div>
	</div>	
	</html>