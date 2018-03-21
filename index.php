<?php
ini_set('display_errors', 'On');
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
</head>
<body>
  <div class="container">
    <div class="col-xs-4">
      <form class="form-group" action="index.php" method="post">
        <label for="username">Username</label>
        <input class="form-control"type="text" name="username">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password">
        <br>
        <input class="btn btn-primary"type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>
