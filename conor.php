<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Agg2vJKvGUng", "registerfacility");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$facility_name = mysqli_real_escape_string($link, $_REQUEST['form2']);
$facility_type = mysqli_real_escape_string($link, $_REQUEST['form3']);
  $contact_phone = mysqli_real_escape_string($link, $_REQUEST['form4']);
  $contact_email = mysqli_real_escape_string($link, $_REQUEST['form5']);
  $space_type = mysqli_real_escape_string($link, $_REQUEST['form6']);
  $space_description = mysqli_real_escape_string($link, $_REQUEST['form7']);
  $space_location1 = mysqli_real_escape_string($link, $_REQUEST['form8']);
  $space_img1 = mysqli_real_escape_string($link, $_REQUEST['form11']);
  $space_img2 = mysqli_real_escape_string($link, $_REQUEST['form12']);
  $space_img3 = mysqli_real_escape_string($link, $_REQUEST['form13']);
  $space_img4 = mysqli_real_escape_string($link, $_REQUEST['form14']);
  $space_img5 = mysqli_real_escape_string($link, $_REQUEST['form15']);
   session_start();
   $company_id = $_SESSION["company"];
		
	

$sql = "insert into facilities(company_id, facility_name, facility_type, contact_phone, contact_email, space_type, space_description, space_location1, space_img1,space_img2, space_img3, space_img4, space_img5)
	values('$company_id', '$facility_name','$facility_type','$contact_phone','$contact_email','$space_type','$space_description','$space_location1','$space_img1','$space_img2','$space_img3','$space_img4','$space_img5')";
 

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
echo "<h2>Your Input:</h2>";
echo $facility_name;
echo "<br>";
echo $facility_type;
echo "<br>";
echo $contact_phone;
echo "<br>";
echo $contact_email;
echo "<br>";
echo $space_type;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
// Close connection
mysqli_close($link);
?>