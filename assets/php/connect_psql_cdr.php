<?php
$servername = "***********";
$username = "*************";
$password = "*************";
$db = "***********";

try {
  $conn = new PDO("pgsql:host=$servername;port=5432;dbname=$db", $username, $password);
   //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
