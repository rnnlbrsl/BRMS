<?php
// remove third parameter (password) if you cannot connect to the database.
$mysqli = new mysqli('localhost','root','root','db-brms');
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
  }
?>