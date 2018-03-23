<?php
  $connection = mysqli_connect("localhost", "root", "root", "loginapp");
  if (!$connection) {
    die("Connection failed");
  }
