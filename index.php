<?php include "db.php"; ?>
<?php include "functions.php."; ?>
<?php createUser();?>
<?php include "includes/header.php."; ?>

    <div class="container">
      <header class="jumbotron">
        <h1>Create</h1>
      </header>
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
	
	<?php include "includes/footer.php."; ?>
  
