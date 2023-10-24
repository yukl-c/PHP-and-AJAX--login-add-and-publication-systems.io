 <?php
 session_start();
 
 /* keep going the programme when the user is an administrative user*/
 if ($_SESSION['admin']==1) { 
		/* to ensure the user has clicked the button from the choices */
		if (isset($_POST['method'])) {
			/* reach to addform.php when user clicks "Administrate" button */
			if ($_POST['method']=="administrate") {
				header("Location: addform.php");
			  /* reach to addbook.php when user clicks "Add Book" button */
			} elseif($_POST["method"] == "addBook"){
				header("Location: addbook.php");
			}
		}
} 
 /* log out to session.php when the user is not an administrative user*/
 else if ($_SESSION['admin']!==1) {
	session_destroy();
	header("Location: session.php");
	exit();  
}
?>