<?php session_start();
 if(!isset($_SESSION['loggedin'])) header("Location: session.php");
 if($_SESSION['loggedin']===FALSE) header("Location: session.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<title>Secret Area</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 <body>
 <center>
 <?php include 'HeaderAndBackground.php'; ?>
	<title>Adding a new user</title>
	Please add a new user.</br>
	* is compulory to type.</br>
	<!--A form adding a new user(cannot add to csv file)-->
	<form action="" method="POST">
	 Login name *: <input type="text" name="username" required minlength="2" title="Please provide a username with no less than 2 characters"><br>
     Password *: <input type="password" name="password" required pattern=".{6,}" title="Please provide a password with no less than 6 characters"><br>
	 Admin Status *: <input type="number" name="adminStatus" required min="0" max="1" title="Please provide number: 0 for person is not an administrator, 1 0 for person is an administrator"><br>
     <input type="submit">
	</form>
	
	<!--button back to secert.php-->
	<button><a href="secret.php">back</a></button>
	
	<!--logout button-->
	<form action="logout.php" method="POST">
	<input type="submit" name="logout" value="Log out">
	</form>
 
 <?php include 'Footer2.php'; ?>
 </center>
 </body>
 </html>