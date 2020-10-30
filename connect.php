<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7373394";
$password = "35p8b2TQdP";
$dbname = "sql7373394";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
