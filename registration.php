<html>
  <head>
  <title>PHP Project</title>
  </head>
  <body>
  <h1>Registration Page</h1>
  <form action="registration.php" method="POST">
  <label for="username"> Enter Username
	<input type="text" name="username" required="required" id="username" />
	  <label for="password"> Enter Password
	<input type="password" name="password" required="required" id="password" />
	<input type="submit" name="submit" id="submit"value="submit" />
  </form>
  </body>
  </html>
  <?php
  if ($_SERVER["REQUEST_METHOD" == "POST"]) {
	  $username = my_sql_escape_string($_POST["username"]);
	  $password = my_sql_escape_string($_POST["password"]);
	  $boo1 = true;
	  
	  mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
	  mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
	  $query = mysql_query("Select * from users"); //SQL query to get data from database
	  while($row = mysql_fetch_array($query)) //display all rows from the query
	  {
		  $table_users = $row["username"]; // the first username row is passed to this variable and so on until the query is finished
		  if ($username == $table_users) // if the username matches one from the database
		  {
			  $boo1 = false;
			  print '<script>alert("Username has been taken. Please try another username.");</script>'; //Prompt
			  print '<script>window.location.assign("registration.php")'; //go back to registration page
		  }
	  }
	  
	  if($boo1) {
		  mysql_query("INSERT INTO users (username, password) VALUES ('$username', '$password')"); //Inserts the value to table users
		  Print '<script>alert("Successfully registered!");</script>';
		  Print '<script>window.location.assign("register.php");</script>'; //redirects to registration page
	  }
  }
  ?>
