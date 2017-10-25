<?php 
session_start();

if (!$_SESSION['logged_in']) {
	header("Location:index.php"); // send them wherever...
}

 ?>

<!DOCTYPE html>
<html>

<body class="container">

  <div class-"jumbotron"></div>

  <h1>RESTRICTED ACCESS</h1>

</body>

</html>