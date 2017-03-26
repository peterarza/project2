<?php
	include_once 'php/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>My Notebook App</title>
</head>

<body>

		<!-- Takes you to the notes stored in database mycookbook-->
		<aside>
			<p>
				<button id="display" onclick="location.href='http://localhost:8888/project2/php/displaynotes.php'">View Previous Notes</button>
			</p>
		</aside>

	<div id="container">		
		<h1>My Notebook App</h1>
			<form name="myNotes" action="php/holdnotes.php" onsubmit="return validate()" method="post">
				
			<!-- Displays error for invalid characters entered in form title -->
				<p id="error"></p>
				
				<label for="title">Title </label>
				<input type="text" name="notetitle" id="noteTitle" required></input>
				
				<textarea id='notebody' placeholder="Enter Notes Here"></textarea>

				<input type="submit" id="addButton" value="Add Note"></input>
			</form>
	</div>
	
<script src="js/main.js"></script>

<script src="js/jquery-3.1.1.slim.js"></script>


</body>
</html>
