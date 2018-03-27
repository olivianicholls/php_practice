<?php include "db.php";?>
<?php include "functions.php";?>
<?php updateUser();?>

<?php include "includes/header.php."; ?>
<div class="container">
      <header class="jumbotron">
        <h1>Update</h1>
      </header>
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
		  <select name="id" id="">
		  <?php
		  showAllData();
		  ?>		
		  </div>
          <input class="btn" type="submit" name="submit" value="Submit">
          <a href="registration.php">Sign Up</a>
        </form>
	</div>
  </div>
<?php include "includes/footer.php."; ?>
