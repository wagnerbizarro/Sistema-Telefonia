<?php
$servername = "*********";
$username = "***********";
$password = "***********";
$db = "***********";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully" . "\n";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage() . "\n";
}
?>
