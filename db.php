<?php
  $connection = mysqli_connect("localhost", "root", "root", "loginapp");
  if ($connection) {
    echo "Connected";
  } else {
    die("Connection failed");
  }
?>
