<?php
$usernameVal=$_REQUEST["username"];
//$passwordVAl=$_REQUEST["password"];


$servername = "localhost";
$username = "root";
$password = "Agg2vJKvGUng";
$dbname = "registerfacility";
$name = $_POST['name'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
     $escapedPW = mysqli_real_escape_string($conn,$_REQUEST['password']);
# generate a random salt to use for this account
$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$saltedPW =  $escapedPW . $salt;
///sha256 is a hashing algorithm
$hashedPW = hash('sha256', $saltedPW); 
    
    $sql="insert into $name(username,password,salt) 
 value('$usernameVal','$hashedPW','$salt')";
    $result=$conn->query($sql);
    if($result==true)
        echo "user inserted successfully";
    else
        echo "user insertion error";
    
}

?>
