<?php
$servername = "localhost";
$name = "root";
$password = "";
$db_name="registration";


$db = mysqli_connect($servername, $name, $password, $db_name);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>