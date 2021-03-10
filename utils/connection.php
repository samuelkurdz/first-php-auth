<?php
// dev connections
  // $dbHost = 'localhost';
  // $dbUser = 'root';
  // $dbPassword = '';
  // $dbName = 'login_sample_db';

  // remote connections
  $dbHost = 'remotemysql.com';
  $dbUser = 'WPUQUSqYnk';
  $dbPassword = 'tZC5rb2QoY';
  $dbName = 'WPUQUSqYnk';

  // $ creating connection to database
  if (!$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName)) {
    die("failed to connect to database");
  }

?>