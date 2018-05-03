<?php
		$server = "localhost";
		$user = "root";
		$password = "Agg2uJKvGUn";
		$dbname = "registerfacility";

		$conn = mysql_connect($server, $user, $password);
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


							$SQL = "SELECT facility_name FROM facilities";
			
		
			mysql_select_db($dbname);
			$result = mysql_query($SQL, $conn);

//now in the loop you've got to be careful with the css classes, as your html shows, they won't be always the same. But this should give you some insight on how it works.

while($fetch = mysql_fetch_row($result)){

   
	echo $fetch["facility_name"];
	  
		
		

 
}