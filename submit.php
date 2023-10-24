<?php
session_start();
if ($_SESSION['admin']==0) header("Location: session.php"); 

if (isset($_POST['title']) and isset($_POST['authors']) and isset($_POST['year']) and isset($_POST['journal']) and isset($_POST['DOI']) and isset($_POST['school'])){
	$newTitle = $_POST['title'];
	$newAuthors = $_POST['authors']; 
	$newYear = $_POST['year']; 
	$newJournal = $_POST['journal'];
	$newDOI = $_POST['DOI'];
	$newSchool = $_POST['school'];

	$list = array($newTitle, $newAuthors, $newYear, $newJournal, $newDOI, $newSchool);

	$file = fopen('booklist1.csv', 'a');
	fputcsv($file, $list);

	fclose($file);

	header("Location: secret.php");
} else {
	header("Location: addbook.php");
}


?>