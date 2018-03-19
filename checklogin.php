<?php
session_start();
$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real-Escape_string($_POST["password"];

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("first_db") or die("Cannot connect to database");
$query = mysql_query("SELECT * from users WHERE username = '$username'");
$exists = mysql_num_rows($query); //checks if username exists
$table_users = "";
$table_password = "";

if ($exists > 0)
{
	while($row = mysql_fetch_assoc($query)) // display all rows from query
	{
		$table_users = $row['username'];
		$table_password = $row['password'];
	}
	if (($username == $table_users) && ($password == $table_password) //checks if there are any matching fields
	{
		if ($password == $table_password) // checks for correct password
		{
			$_SESSION['user'] = $username; //sets the username in the session
			header("location: home.php"); //redirects to the authenticated home page
		}
	}
	else
	{
		Print '<script>alert("Incorrect Password!")</script>';
		Print '<script>window.location.assign("login.php")</script'>;
	}
	else 
	{
		Print '<script>alert("Incorrect Username!")</script>';
		Print '<script>window.location.assign("login.php")</script>';
	}
}
?>
