<?php
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $connection = mysqli_connect("localhost", "root", "root", "loginapp");
  if ($connection) {
    echo "Connected";
  } else {
    die("Connection failed");
  }
  $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Query Failed: " . mysqli_error());
  }
}
?>

<html>
  <head lang="en">
    <meta charset="utf-8">
    <title>Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">
      <header class="jumbotron">
        <h1>SPAN&PLAN</h1>
      </header>
      <h3>Description of stuff</h3>
      <div class="col-xs-4"></div>
      <div class="col-xs-4">
        <form action="index.php" method="post">
		<div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username">
		  </div>
		  <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
          </div>
          <input class="btn" type="submit" name="submit" value="SIGN IN">
          <a href="registration.php">SIGN UP</a>
        </form>
      </div>
      <div class="col-xs-4"></div>
    </div>
  </body>
</html>
