<?php
// PHP Data Objects(PDO) Sample Code:
try {
  $conn = new PDO("sqlsrv:server = tcp:pitchbook.database.windows.net,1433; Database = pitchbook", "andreas720", "<yourpassword>");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
  print("Error connecting to SQL Server.");
  die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "andreas720@pitchbook", "pwd" => "yourpassword", "Database" => "pitchbook", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:pitchbook.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?> 
