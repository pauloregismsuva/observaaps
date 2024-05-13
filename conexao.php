<?php
  $db_host = 'localhost';
  $db_user = 'observaaps';
  $db_password = 'mHGuqvG8q7dIzW';
  $db = 'observaaps';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
  }
?>