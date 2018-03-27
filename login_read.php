<?php include "db.php"; ?>
<?php include "functions.php." ?>
<?php include "includes/header.php."; ?>

  <div class="container">
      <header class="jumbotron">
        <h1>Read</h1>
      </header>
    <div class="co l-xs-6">
	<pre>
	<?php 
	readTable()
	?>
	</pre>
	</div>
  </div>
<?php include "includes/footer.php."; ?>
