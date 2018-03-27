<?php include "db.php";?>
<?php
function createUser() {
	global $connection;
	if (isset($_POST["submit"])) {
		$username = mysqli_real_escape_string($connection, $_POST["username"]);
		$password = mysqli_real_escape_string($connection, $_POST["password"]);
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;
		$passwordEncrypt = crypt($password, $hashF_and_salt);
		$query = "INSERT INTO users(username, password) VALUES ('$username', '$passwordEncrypt')";
		$result = mysqli_query($connection, $query);
		if (!$result) {
			die("Query Failed: " . mysqli_error());
		}
	}
}

function readTable() {
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		print_r($query);
	}
	if (!$result) {
		die("Query Failed: " . mysqli_error());
	}
}

function updateUser() {
	global $connection;
	if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($connection, $_POST["username"]);
	$password = mysqli_real_escape_string($connection, $_POST["password"]);
	$id = $_POST['id'];
	$query = "UPDATE users SET username = '$username' password = '$password' WHERE  id = '$id'";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("QUERY FAILED"); 
		}
	}	
}
function showAllData() {
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query Failed: " . mysqli_error());
	}
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

function deleteUser() {
	global $connection;
	if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$query = "DELETE users WHERE  id = '$id'";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("QUERY FAILED"); 
		}
	}
}
