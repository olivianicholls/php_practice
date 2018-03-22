<?php include "db.php"
  $query = "SELECT * FROM users";
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
    <div class="co l-xs-6">
	<form action="index.php" method="post">
		<div class="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username">
		  </div>
		  <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
          </div>
		  
		  <div class="form-group">
		  <select name="" id="">
		  <option value="">1</option>
		  </div>
          <input class="btn" type="submit" name="submit" value="Submit">
          <a href="registration.php">Sign Up</a>
        </form>
	</div>
  </div>
 </body>
</html>
