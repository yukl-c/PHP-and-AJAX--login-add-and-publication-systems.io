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
	<h1>The Faculty of Natural Science, Keele University</h1>
	<h2>Adding a new book</h2>
	Please add a new book.</br>
	* is compulory to type.</br>
	<!--A form adding a new book to csv file-->
	<form action="submit.php" method="POST">
	 Title *: <input type="text" name="title" required pattern="[A-Za-z]{2,}" title="Please provide title with no less than 2 characters"><br>
     Authors *: <input type="text" name="authors" required pattern="[A-Za-z]{2,}" title="Please provide Author name with no less than 2 characters"><br>
	 Year: <input type="number" name="year" min="1000" max="2022" title="Please proivde the year Between 1000 and 2022"><br>
	 Journal: <input type="text" name="journal" pattern="[A-Za-z]{2,}" title="Please provide journal name with no less than 2 characters"><br>
	 Digital Object Identifier(DOI): <input type="text" name="DOI" required pattern="https?://.+" title="Please include http://"><br>
	 School: <input type="text" name="school" pattern="[A-Za-z]{2,}" title="Please provide school name with no less than 2 characters"><br>
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