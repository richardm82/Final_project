<?php
	define("DB_SERVER", "oniddb.cws.oregonstate.edu");
	define("DB_USER", "millerri-db");
	define("DB_PASS", "r1xlqDRsW04rBX1O");
	define("DB_NAME", "millerri-db");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
