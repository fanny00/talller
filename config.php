<?php

$db_host="localhost";
$db_user="admin";
$db_password="h5CU<q6UndRz#r]<";
$db_name="taller_software";

// Create connection
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
// Check connection
if ($db_connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
