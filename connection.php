<?php
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPassword = '';
  $dbName = 'login_sample_db';

  // $ creating connection to database
  if (!$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName)) {
    die("failed to connect to database");
  }

?>