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
	<?php 
	
	while ($row = mysqli_fetch_assoc($result)) {
		print_r($row); 
	}
	
	?>
	</div>
  </div>
 </body>
</html>
	  
