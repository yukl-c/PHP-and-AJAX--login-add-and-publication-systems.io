<?php session_start();
 if(!isset($_SESSION['loggedin'])) header("Location: session.php");
 if($_SESSION['loggedin']===FALSE) header("Location: session.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<title>Secret Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
 <center>
	<?php include 'HeaderAndBackground.php'; ?>
 
 <!--Welcome Notice-->
 <h2>Welcome to the private message area for
 <?php echo $_SESSION['username'] ?></h2>
 <h5>Messages:</h5><!--to message whether the user is administrative user or not-->
 <?php
  if ($_SESSION['admin'] == 1) {
	 echo "Yor are administrative user";
} elseif ($_SESSION['admin'] == 0) {
	echo "You are not administrative user";
 }
 ?></br>
 
 <h5>What do you want to do?</h5>
 <h6>Only administrators are allowed to add user and book records</h6>
 <!--choices for users to choose-->
 <form action="admin.php" method="POST">
	<button type="submit" name="method" value="administrate">Administrate</button>
  </form>
  </br>
  
  <form action="admin.php" method="POST">
	<button type="submit" name="method" value="addBook">Add Book</button>
  </form>
  </br>
 
 <form action="logout.php" method="POST">
 <input type="submit" name="logout" value="Log out">
 </form>
 </br>
 
 <?php include 'Footer2.php'; ?>
 
 </center>
 </body>
 </html>
